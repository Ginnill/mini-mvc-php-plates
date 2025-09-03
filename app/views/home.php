<?php $this->layout('master', ['title' => 'Home']) ?>

<div class="container mx-auto">
    <!-- <form action="/" method="post">
        <input type="text" name="name" placeholder="Nome" id="">
        <input type="email" name="email" placeholder="E-mail" id="">
        <input type="submit" value="Enviar">
    </form> -->

    <?php if (!empty($repos)): ?>
        <ul class="grid md:grid-cols-2 gap-4">
            <?php foreach ($repos as $repo): ?>
                <li class="p-4 rounded-lg border">
                    <a href="<?= $this->e($repo['html_url']) ?>" target="_blank" class="font-bold underline">
                        <?= $this->e($repo['name']) ?>
                    </a>
                    <?php if (!empty($repo['description'])): ?>
                        <p class="mt-1"><?= $this->e($repo['description']) ?></p>
                    <?php endif; ?>
                    <p class="text-sm mt-2">
                        ⭐ <?= (int) $repo['stargazers_count'] ?> ·
                        Forks: <?= (int) $repo['forks_count'] ?> ·
                        Lang: <?= $this->e($repo['language'] ?? '—') ?>
                    </p>
                    <p class="text-xs text-gray-600 mt-1">
                        Atualizado em: <?= $this->e((new DateTime($repo['updated_at']))->format('d/m/Y H:i')) ?>
                    </p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhum repositório encontrado (ou erro na API).</p>
    <?php endif; ?>
</div>