<form method="post">
    <?= $form->input('titre', 'Tire de l\'annonce'); ?>
    <?= $form->input('contenu', 'Contenu', ['type' => 'textarea']); ?>
    <?= $form->select('category_id', 'Catégorie', $categories); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>
<style type="text/css">#slogan{display: none;}</style>