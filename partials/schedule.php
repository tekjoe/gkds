<section class="grid grid__schedule">
  <h2 class="grid__title">Class Schedule</h2>
  <?php if (get_field('calendar_id', 'option')): ?>
  <?php echo do_shortcode('[calendar id="'.get_field('calendar_id', 'option').'"]'); ?>
  <?php else: ?>
  <span></span>
  <?php endif; ?>
  </div>
</section>