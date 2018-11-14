<?php
function create_checkbox_option($form_helper_obj, $id, $title, $li_class, $opt_icon)
{
  $opt = '<li class="' . $li_class . '">';
  $opt .= '<div class="form-check checkbox">';
  $opt .= $form_helper_obj->checkbox(
    'menu_id[]',
    ['value' => $id, 'hiddenField' => false, 'class' => 'form-check-input']
  );
  $opt .= '<label class="form-check-label"><i class="' . $opt_icon . '"></i> ' . $title . '</label>';
  $opt .= '</div>';
  $opt .= '</li>';

  return $opt;
}
