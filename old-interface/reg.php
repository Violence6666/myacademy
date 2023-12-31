﻿<?php
    session_start();
?>

<!doctype html>
<html>
<head>
  <style type="text/css">
    .turbo-progress-bar {
      position: fixed;
      display: block;
      top: 0;
      left: 0;
      height: 3px;
      background: #0076ff;
      z-index: 2147483647;
      transition:
        width 300ms ease-out,
        opacity 150ms 150ms ease-in;
      transform: translate3d(0, 0, 0);
    }
  </style>

  <link rel="dns-prefetch" href="https://github.githubassets.com">
  <link rel="dns-prefetch" href="https://avatars.githubusercontent.com">
  <link rel="dns-prefetch" href="https://github-cloud.s3.amazonaws.com">
  <link rel="dns-prefetch" href="https://user-images.githubusercontent.com/">
  <link rel="preconnect" href="https://github.githubassets.com" crossorigin="">
  <link rel="preconnect" href="https://avatars.githubusercontent.com">



  <link crossorigin="anonymous" media="all" rel="stylesheet"
    href="https://github.githubassets.com/assets/light-a09cef873428.css">
  <link crossorigin="anonymous" media="all" rel="stylesheet"
    href="https://github.githubassets.com/assets/dark-5d486a4ede8e.css">
  <link data-color-theme="light" crossorigin="anonymous" media="all" rel="stylesheet"
    data-href="https://github.githubassets.com/assets/light-a09cef873428.css">
  <link data-color-theme="dark" crossorigin="anonymous" media="all" rel="stylesheet"
    data-href="https://github.githubassets.com/assets/dark-5d486a4ede8e.css">
  <link data-color-theme="dark_dimmed" crossorigin="anonymous" media="all" rel="stylesheet"
    data-href="https://github.githubassets.com/assets/dark_dimmed-27c8d635e4e5.css">
  <link data-color-theme="dark_high_contrast" crossorigin="anonymous" media="all" rel="stylesheet"
    data-href="https://github.githubassets.com/assets/dark_high_contrast-8438e75afd36.css">
  <link data-color-theme="dark_colorblind" crossorigin="anonymous" media="all" rel="stylesheet"
    data-href="https://github.githubassets.com/assets/dark_colorblind-bf5665b96628.css">
  <link data-color-theme="light_colorblind" crossorigin="anonymous" media="all" rel="stylesheet"
    data-href="https://github.githubassets.com/assets/light_colorblind-c414b5ba1dce.css">
  <link data-color-theme="light_high_contrast" crossorigin="anonymous" media="all" rel="stylesheet"
    data-href="https://github.githubassets.com/assets/light_high_contrast-e5868b7374db.css">
  <link data-color-theme="light_tritanopia" crossorigin="anonymous" media="all" rel="stylesheet"
    data-href="https://github.githubassets.com/assets/light_tritanopia-299ac9c64ec0.css">
  <link data-color-theme="dark_tritanopia" crossorigin="anonymous" media="all" rel="stylesheet"
    data-href="https://github.githubassets.com/assets/dark_tritanopia-3a26e78ad0ff.css">

  <link crossorigin="anonymous" media="all" rel="stylesheet"
    href="https://github.githubassets.com/assets/primer-primitives-6143c8f97ed1.css">
  <link crossorigin="anonymous" media="all" rel="stylesheet"
    href="https://github.githubassets.com/assets/primer-047ee6293fcd.css">
  <link crossorigin="anonymous" media="all" rel="stylesheet"
    href="https://github.githubassets.com/assets/global-1ef6adcf9af4.css">
  <link crossorigin="anonymous" media="all" rel="stylesheet"
    href="https://github.githubassets.com/assets/github-0eb2e2dcb344.css">
  <link crossorigin="anonymous" media="all" rel="stylesheet"
    href="https://github.githubassets.com/assets/signup-ecc249dae85b.css">


  <meta name="optimizely-datafile"
    content="{&quot;groups&quot;: [], &quot;environmentKey&quot;: &quot;production&quot;, &quot;rollouts&quot;: [], &quot;typedAudiences&quot;: [], &quot;projectId&quot;: &quot;16737760170&quot;, &quot;variables&quot;: [], &quot;featureFlags&quot;: [], &quot;experiments&quot;: [], &quot;version&quot;: &quot;4&quot;, &quot;audiences&quot;: [{&quot;conditions&quot;: &quot;[\&quot;or\&quot;, {\&quot;match\&quot;: \&quot;exact\&quot;, \&quot;name\&quot;: \&quot;$opt_dummy_attribute\&quot;, \&quot;type\&quot;: \&quot;custom_attribute\&quot;, \&quot;value\&quot;: \&quot;$opt_dummy_value\&quot;}]&quot;, &quot;id&quot;: &quot;$opt_dummy_audience&quot;, &quot;name&quot;: &quot;Optimizely-Generated Audience for Backwards Compatibility&quot;}], &quot;anonymizeIP&quot;: true, &quot;sdkKey&quot;: &quot;WTc6awnGuYDdG98CYRban&quot;, &quot;attributes&quot;: [{&quot;id&quot;: &quot;16822470375&quot;, &quot;key&quot;: &quot;user_id&quot;}, {&quot;id&quot;: &quot;17143601254&quot;, &quot;key&quot;: &quot;spammy&quot;}, {&quot;id&quot;: &quot;18175660309&quot;, &quot;key&quot;: &quot;organization_plan&quot;}, {&quot;id&quot;: &quot;18813001570&quot;, &quot;key&quot;: &quot;is_logged_in&quot;}, {&quot;id&quot;: &quot;19073851829&quot;, &quot;key&quot;: &quot;geo&quot;}, {&quot;id&quot;: &quot;20175462351&quot;, &quot;key&quot;: &quot;requestedCurrency&quot;}, {&quot;id&quot;: &quot;20785470195&quot;, &quot;key&quot;: &quot;country_code&quot;}, {&quot;id&quot;: &quot;21656311196&quot;, &quot;key&quot;: &quot;opened_downgrade_dialog&quot;}], &quot;botFiltering&quot;: false, &quot;accountId&quot;: &quot;16737760170&quot;, &quot;events&quot;: [{&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;17911811441&quot;, &quot;key&quot;: &quot;hydro_click.dashboard.teacher_toolbox_cta&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18124116703&quot;, &quot;key&quot;: &quot;submit.organizations.complete_sign_up&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18145892387&quot;, &quot;key&quot;: &quot;no_metric.tracked_outside_of_optimizely&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18178755568&quot;, &quot;key&quot;: &quot;click.org_onboarding_checklist.add_repo&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18180553241&quot;, &quot;key&quot;: &quot;submit.repository_imports.create&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18186103728&quot;, &quot;key&quot;: &quot;click.help.learn_more_about_repository_creation&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18188530140&quot;, &quot;key&quot;: &quot;test_event&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18191963644&quot;, &quot;key&quot;: &quot;click.empty_org_repo_cta.transfer_repository&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18195612788&quot;, &quot;key&quot;: &quot;click.empty_org_repo_cta.import_repository&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18210945499&quot;, &quot;key&quot;: &quot;click.org_onboarding_checklist.invite_members&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18211063248&quot;, &quot;key&quot;: &quot;click.empty_org_repo_cta.create_repository&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18215721889&quot;, &quot;key&quot;: &quot;click.org_onboarding_checklist.update_profile&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18224360785&quot;, &quot;key&quot;: &quot;click.org_onboarding_checklist.dismiss&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18234832286&quot;, &quot;key&quot;: &quot;submit.organization_activation.complete&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18252392383&quot;, &quot;key&quot;: &quot;submit.org_repository.create&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18257551537&quot;, &quot;key&quot;: &quot;submit.org_member_invitation.create&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18259522260&quot;, &quot;key&quot;: &quot;submit.organization_profile.update&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18564603625&quot;, &quot;key&quot;: &quot;view.classroom_select_organization&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18568612016&quot;, &quot;key&quot;: &quot;click.classroom_sign_in_click&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18572592540&quot;, &quot;key&quot;: &quot;view.classroom_name&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18574203855&quot;, &quot;key&quot;: &quot;click.classroom_create_organization&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18582053415&quot;, &quot;key&quot;: &quot;click.classroom_select_organization&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18589463420&quot;, &quot;key&quot;: &quot;click.classroom_create_classroom&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18591323364&quot;, &quot;key&quot;: &quot;click.classroom_create_first_classroom&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18591652321&quot;, &quot;key&quot;: &quot;click.classroom_grant_access&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18607131425&quot;, &quot;key&quot;: &quot;view.classroom_creation&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;18831680583&quot;, &quot;key&quot;: &quot;upgrade_account_plan&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;19064064515&quot;, &quot;key&quot;: &quot;click.signup&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;19075373687&quot;, &quot;key&quot;: &quot;click.view_account_billing_page&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;19077355841&quot;, &quot;key&quot;: &quot;click.dismiss_signup_prompt&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;19079713938&quot;, &quot;key&quot;: &quot;click.contact_sales&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;19120963070&quot;, &quot;key&quot;: &quot;click.compare_account_plans&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;19151690317&quot;, &quot;key&quot;: &quot;click.upgrade_account_cta&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;19424193129&quot;, &quot;key&quot;: &quot;click.open_account_switcher&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;19520330825&quot;, &quot;key&quot;: &quot;click.visit_account_profile&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;19540970635&quot;, &quot;key&quot;: &quot;click.switch_account_context&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;19730198868&quot;, &quot;key&quot;: &quot;submit.homepage_signup&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;19820830627&quot;, &quot;key&quot;: &quot;click.homepage_signup&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;19988571001&quot;, &quot;key&quot;: &quot;click.create_enterprise_trial&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20036538294&quot;, &quot;key&quot;: &quot;click.create_organization_team&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20040653299&quot;, &quot;key&quot;: &quot;click.input_enterprise_trial_form&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20062030003&quot;, &quot;key&quot;: &quot;click.continue_with_team&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20068947153&quot;, &quot;key&quot;: &quot;click.create_organization_free&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20086636658&quot;, &quot;key&quot;: &quot;click.signup_continue.username&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20091648988&quot;, &quot;key&quot;: &quot;click.signup_continue.create_account&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20103637615&quot;, &quot;key&quot;: &quot;click.signup_continue.email&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20111574253&quot;, &quot;key&quot;: &quot;click.signup_continue.password&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20120044111&quot;, &quot;key&quot;: &quot;view.pricing_page&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20152062109&quot;, &quot;key&quot;: &quot;submit.create_account&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20165800992&quot;, &quot;key&quot;: &quot;submit.upgrade_payment_form&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20171520319&quot;, &quot;key&quot;: &quot;submit.create_organization&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20222645674&quot;, &quot;key&quot;: &quot;click.recommended_plan_in_signup.discuss_your_needs&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20227443657&quot;, &quot;key&quot;: &quot;submit.verify_primary_user_email&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20234607160&quot;, &quot;key&quot;: &quot;click.recommended_plan_in_signup.try_enterprise&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20238175784&quot;, &quot;key&quot;: &quot;click.recommended_plan_in_signup.team&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20239847212&quot;, &quot;key&quot;: &quot;click.recommended_plan_in_signup.continue_free&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20251097193&quot;, &quot;key&quot;: &quot;recommended_plan&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20438619534&quot;, &quot;key&quot;: &quot;click.pricing_calculator.1_member&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20456699683&quot;, &quot;key&quot;: &quot;click.pricing_calculator.15_members&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20467868331&quot;, &quot;key&quot;: &quot;click.pricing_calculator.10_members&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20476267432&quot;, &quot;key&quot;: &quot;click.trial_days_remaining&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20476357660&quot;, &quot;key&quot;: &quot;click.discover_feature&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20479287901&quot;, &quot;key&quot;: &quot;click.pricing_calculator.custom_members&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20481107083&quot;, &quot;key&quot;: &quot;click.recommended_plan_in_signup.apply_teacher_benefits&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20483089392&quot;, &quot;key&quot;: &quot;click.pricing_calculator.5_members&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20484283944&quot;, &quot;key&quot;: &quot;click.onboarding_task&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20484996281&quot;, &quot;key&quot;: &quot;click.recommended_plan_in_signup.apply_student_benefits&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20486713726&quot;, &quot;key&quot;: &quot;click.onboarding_task_breadcrumb&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20490791319&quot;, &quot;key&quot;: &quot;click.upgrade_to_enterprise&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20491786766&quot;, &quot;key&quot;: &quot;click.talk_to_us&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20494144087&quot;, &quot;key&quot;: &quot;click.dismiss_enterprise_trial&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20499722759&quot;, &quot;key&quot;: &quot;completed_all_tasks&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20500710104&quot;, &quot;key&quot;: &quot;completed_onboarding_tasks&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20513160672&quot;, &quot;key&quot;: &quot;click.read_doc&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20516196762&quot;, &quot;key&quot;: &quot;actions_enabled&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20518980986&quot;, &quot;key&quot;: &quot;click.dismiss_trial_banner&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20535446721&quot;, &quot;key&quot;: &quot;click.issue_actions_prompt.dismiss_prompt&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20557002247&quot;, &quot;key&quot;: &quot;click.issue_actions_prompt.setup_workflow&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20595070227&quot;, &quot;key&quot;: &quot;click.pull_request_setup_workflow&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20626600314&quot;, &quot;key&quot;: &quot;click.seats_input&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20642310305&quot;, &quot;key&quot;: &quot;click.decrease_seats_number&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20662990045&quot;, &quot;key&quot;: &quot;click.increase_seats_number&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20679620969&quot;, &quot;key&quot;: &quot;click.public_product_roadmap&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20761240940&quot;, &quot;key&quot;: &quot;click.dismiss_survey_banner&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20767210721&quot;, &quot;key&quot;: &quot;click.take_survey&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20795281201&quot;, &quot;key&quot;: &quot;click.archive_list&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20966790249&quot;, &quot;key&quot;: &quot;contact_sales.submit&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20996500333&quot;, &quot;key&quot;: &quot;contact_sales.existing_customer&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;20996890162&quot;, &quot;key&quot;: &quot;contact_sales.blank_message_field&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21000470317&quot;, &quot;key&quot;: &quot;contact_sales.personal_email&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21002790172&quot;, &quot;key&quot;: &quot;contact_sales.blank_phone_field&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21354412592&quot;, &quot;key&quot;: &quot;click.dismiss_create_readme&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21366102546&quot;, &quot;key&quot;: &quot;click.dismiss_zero_user_content&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21370252505&quot;, &quot;key&quot;: &quot;account_did_downgrade&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21370840408&quot;, &quot;key&quot;: &quot;click.cta_create_readme&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21375451068&quot;, &quot;key&quot;: &quot;click.cta_create_new_repository&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21385390948&quot;, &quot;key&quot;: &quot;click.zero_user_content&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21467712175&quot;, &quot;key&quot;: &quot;click.downgrade_keep&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21484112202&quot;, &quot;key&quot;: &quot;click.downgrade&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21495292213&quot;, &quot;key&quot;: &quot;click.downgrade_survey_exit&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21508241468&quot;, &quot;key&quot;: &quot;click.downgrade_survey_submit&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21512030356&quot;, &quot;key&quot;: &quot;click.downgrade_support&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21539090022&quot;, &quot;key&quot;: &quot;click.downgrade_exit&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21543640644&quot;, &quot;key&quot;: &quot;click_fetch_upstream&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21646510300&quot;, &quot;key&quot;: &quot;click.move_your_work&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21656151116&quot;, &quot;key&quot;: &quot;click.add_branch_protection_rule&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21663860599&quot;, &quot;key&quot;: &quot;click.downgrade_dialog_open&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21687860483&quot;, &quot;key&quot;: &quot;click.learn_about_protected_branches&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21689050333&quot;, &quot;key&quot;: &quot;click.dismiss_protect_this_branch&quot;}, {&quot;experimentIds&quot;: [], &quot;id&quot;: &quot;21864370109&quot;, &quot;key&quot;: &quot;click.sign_in&quot;}], &quot;revision&quot;: &quot;1372&quot;}">


  <script type="application/json" id="client-env">
    {
      "locale": "en",
      "featureFlags": ["failbot_handle_non_errors", "geojson_azure_maps", "image_metric_tracking",
        "turbo_experiment_risky", "sample_network_conn_type"
      ]
    }
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/wp-runtime-2bcd8c4570a1.js"></script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_dompurify_dist_purify_js-64d590970fa6.js"></script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_stacktrace-parser_dist_stack-trace-parser_esm_js-node_modules_github_bro-a4c183-18bf85b8e9f4.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/ui_packages_soft-nav_soft-nav_ts-df17d5597d8f.js"></script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/environment-509b58e05b9f.js"></script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_github_selector-observer_dist_index_esm_js-2646a2c533e3.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_primer_behaviors_dist_esm_focus-zone_js-d55308df5023.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_github_relative-time-element_dist_index_js-99e288659d4f.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_fzy_js_index_js-node_modules_github_markdown-toolbar-element_dist_index_js-007410e871c1.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_delegated-events_dist_index_js-node_modules_github_auto-complete-element-5b3870-9b38c0812424.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_github_filter-input-element_dist_index_js-node_modules_github_remote-inp-8873b7-5771678648e0.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_github_file-attachment-element_dist_index_js-node_modules_primer_view-co-bdc901-0fe41db0acb6.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/github-elements-6466cd5dafb5.js"></script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/element-registry-d892b58419fa.js"></script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_lit-html_lit-html_js-9d9fe1859ce5.js"></script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_github_hydro-analytics-client_dist_analytics-client_js-node_modules_gith-f3aee1-fd3c22610e40.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_github_mini-throttle_dist_index_js-node_modules_github_alive-client_dist-bf5aa2-4aefce0fc3c8.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_morphdom_dist_morphdom-esm_js-b1fdd7158cf0.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_github_turbo_dist_turbo_es2017-esm_js-1f4793023fcd.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_github_remote-form_dist_index_js-node_modules_scroll-anchoring_dist_scro-52dc4b-e1e33bfc0b7e.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_color-convert_index_js-35b3ae68c408.js"></script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_github_paste-markdown_dist_index_esm_js-node_modules_github_quote-select-7a8e2b-f036384374ea.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/app_assets_modules_github_details-dialog_ts-app_assets_modules_github_fetch_ts-9ca164041015.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/app_assets_modules_github_updatable-content_ts-ui_packages_hydro-analytics_hydro-analytics_ts-e4da304b75e7.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/app_assets_modules_github_onfocus_ts-app_assets_modules_github_sticky-scroll-into-view_ts-b88dcdb1ae32.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/app_assets_modules_github_behaviors_task-list_ts-app_assets_modules_github_sso_ts-ui_packages-7d50ad-9491f2be61ee.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/app_assets_modules_github_behaviors_ajax-error_ts-app_assets_modules_github_behaviors_include-2e2258-f7b8ad0ef997.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/app_assets_modules_github_behaviors_commenting_edit_ts-app_assets_modules_github_behaviors_ht-83c235-f22ac6b94445.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/behaviors-c3c7145e95a3.js"></script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_delegated-events_dist_index_js-node_modules_github_catalyst_lib_index_js-06ff531-fe0b8ccc90a5.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/notifications-global-f57687007bfc.js"></script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/vendors-node_modules_optimizely_optimizely-sdk_dist_optimizely_browser_es_min_js-node_modules-089adc-2328ba323205.js">
  </script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/optimizely-b8ae60018b11.js"></script>

  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/signup-redesign-a838e9ddee81.js"></script>
  <script crossorigin="anonymous" defer="defer" type="application/javascript"
    src="https://github.githubassets.com/assets/signup-9197d41c14b1.js"></script>




  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Регистрация</title>
  <meta name="route-pattern" content="/signup(.:format)">


  <meta name="current-catalog-service-hash" content="507e874288c76f570a246d72cfafc881216cd6973006f4c917f50398aef5ca3d">


  <meta name="request-id" content="C270:13D4E:F1DE795:F5AE2E5:651155FB" data-pjax-transient="true">
  <meta name="html-safe-nonce" content="76247ded3dde42bf858fe72f2f2dd9a80f54e04485b49746e1974fcd3cf492ae"
    data-pjax-transient="true">
  <meta name="visitor-payload"
    content="eyJyZWZlcnJlciI6Imh0dHBzOi8vZ2l0aHViLmNvbS8iLCJyZXF1ZXN0X2lkIjoiQzI3MDoxM0Q0RTpGMURFNzk1OkY1QUUyRTU6NjUxMTU1RkIiLCJ2aXNpdG9yX2lkIjoiNDIxNDg3NzAyODE4NzQ1Njk1NyIsInJlZ2lvbl9lZGdlIjoiZnJhIiwicmVnaW9uX3JlbmRlciI6ImZyYSJ9"
    data-pjax-transient="true">
  <meta name="visitor-hmac" content="2b3d0db2a3aade218d1b23daaac7de8bf3062a5e3008969731373bd45e589b60"
    data-pjax-transient="true">




  <meta name="github-keyboard-shortcuts" content="" data-turbo-transient="true">


  <meta name="selected-link" value="/signup" data-turbo-transient="">
  <link rel="assets" href="https://github.githubassets.com/">

  <meta name="google-site-verification" content="c1kuD-K2HIVF635lypcsWPoD4kilo5-jA_wBFyT4uMY">
  <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
  <meta name="google-site-verification" content="ZzhVyEFwb7w3e0-uOTltm8Jsck2F5StVihD0exw2fsA">
  <meta name="google-site-verification" content="GXs5KoUUkNCoaAZn7wPN-t01Pywp9M3sEjnt_3_ZWPc">
  <meta name="google-site-verification" content="Apib7-x98H0j5cPqHWwSMm6dNU4GmODRoqxLiDzdx9I">

  <meta name="octolytics-url" content="https://collector.github.com/github/collect">










  <meta name="user-login" content="">



  <meta name="viewport" content="width=device-width">

  <meta name="description"
    content="GitHub is where people build software. More than 100 million people use GitHub to discover, fork, and contribute to over 330 million projects.">
  <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
  <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
  <meta property="fb:app_id" content="1401488693436528">
  <meta name="apple-itunes-app"
    content="app-id=1477376905, app-argument=https://github.com/signup?ref_cta=Sign+up&amp;ref_loc=header+logged+out&amp;ref_page=%2F&amp;source=header-home">
  <meta property="og:url" content="https://github.com">
  <meta property="og:site_name" content="GitHub">
  <meta property="og:title" content="Build software better, together">
  <meta property="og:description"
    content="GitHub is where people build software. More than 100 million people use GitHub to discover, fork, and contribute to over 330 million projects.">
  <meta property="og:image" content="img/logo.svg">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="1200">
  <meta property="og:image" content="https://github.githubassets.com/images/modules/open_graph/github-mark.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="620">
  <meta property="og:image" content="https://github.githubassets.com/images/modules/open_graph/github-octocat.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="620">

  <meta property="twitter:site" content="github">
  <meta property="twitter:site:id" content="13334762">
  <meta property="twitter:creator" content="github">
  <meta property="twitter:creator:id" content="13334762">
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="GitHub">
  <meta property="twitter:description"
    content="GitHub is where people build software. More than 100 million people use GitHub to discover, fork, and contribute to over 330 million projects.">
  <meta property="twitter:image:src" content="img/logo.svg">
  <meta property="twitter:image:width" content="1200">
  <meta property="twitter:image:height" content="1200">



  <meta name="hostname" content="github.com">



  <meta name="expected-hostname" content="github.com">


  <meta http-equiv="x-pjax-version" content="a1887101d5970ec2690e4d0035d1aad6a433860f0d7ee04090d216d23ae3c92a"
    data-turbo-track="reload">
  <meta http-equiv="x-pjax-csp-version" content="026a5559637c9582c0d4ebd3e022b2f0d2683e6dd081693f9025674c32a57c46"
    data-turbo-track="reload">
  <meta http-equiv="x-pjax-css-version" content="dbb03309ff3a7580a4bb42bd96ba8f5412ef31b10b806a09ab932c23d368d93a"
    data-turbo-track="reload">
  <meta http-equiv="x-pjax-js-version" content="7da9441fffff9d134cb18b24c8e15eef75d19d119e645de8792479aedcd1745f"
    data-turbo-track="reload">

  <meta name="turbo-cache-control" content="no-preview" data-turbo-transient="">

  <link crossorigin="anonymous" media="all" rel="stylesheet"
    href="https://github.githubassets.com/assets/site-c4886149a816.css">
  <link crossorigin="anonymous" media="all" rel="stylesheet"
    href="https://github.githubassets.com/assets/home-9441872b9454.css">



  <meta name="turbo-body-classes"
    content="logged-out env-production page-responsive height-full d-flex flex-column header-overlay">


  <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">

  <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">

  <meta name="browser-optimizely-client-errors-url"
    content="https://api.github.com/_private/browser/optimizely_client/errors">

  <link rel="mask-icon" href="img/logo.svg" color="#000000">
  <link rel="alternate icon" class="js-site-favicon" type="image/png" href="img/logo.svg">
  <link rel="icon" class="js-site-favicon" type="image/svg+xml" href="img/logo.svg">

  <meta name="theme-color" content="#1e2327">



  <link rel="manifest" href="/manifest.json" crossorigin="use-credentials">

  <link rel="stylesheet" href="styles/styleReg.css" type="text/css" />
  <style type="text/css">
    <?php include "styleNe.css"
    ?>
  </style>
</head>

<body>
  <div data-turbo-body class="logged-out env-production page-responsive height-full d-flex flex-column header-overlay"
    style="word-wrap: break-word;">
    <div class="position-relative js-header-wrapper ">
      <span data-view-component="true" class="progress-pjax-loader Progress position-fixed width-full">
        <span style="width: 0%;" data-view-component="true"
          class="Progress-item progress-pjax-loader-bar left-0 top-0 color-bg-accent-emphasis"></span>
      </span>





      <header class="js-warp-hide header-logged-out f4 py-3 z-2" role="banner">
        <div class="container-xl d-lg-flex flex-items-center p-responsive">
          <div class="d-md-flex flex-justify-between flex-items-center width-full">
            <a href="index.html" aria-label="Homepage">
              <img class="logotype octicon octicon-mark-github color-fg-on-emphasis" src="img/logo.svg" />
            </a>

            <div class="font-mktg mt-3 mt-md-0">
              <span class="mr-2 text-gray-light-mktg">У вас уже есть аккаунт?</span>
              <a href="login.php" class="color-fg-on-emphasis">
                Войти →
              </a>
            </div>
          </div>
        </div>
      </header>
    </div>
    <div class="application-main d-flex flex-auto flex-column" data-commit-hovercards-enabled=""
      data-discussion-hovercards-enabled="" data-issue-and-pr-hovercards-enabled="">
      <div class="js-signup-warp-bg signup-warp-bg position-absolute" role="img" aria-describedby="video-desc"
        hidden=""></div>
      <main class="js-warp-hide bg-gray-dark-mktg d-flex flex-auto flex-column overflow-hidden position-relative">
        <div class="d-flex flex-auto flex-justify-center pt-12">

          <text-suggester class="js-continue-container width-full z-1 signup-text-suggester" data-catalyst="">
            <div class="m-4 p-4 f4 color-shadow-small bg-gray-800-mktg rounded-2 signup-content-container">
              <h1 class="sr-only"></h1>
              <typing-effect
                data-lines="[&quot;Добро пожаловать в МоюАкадемию!&quot;, &quot;Давайте начнем приключение&quot;]"
                data-continue-to="email-container" class="js-signup-typed-welcome">
                <span data-target="typing-effect.content" class="text-mono text-gray-light-mktg">
                </span>
                <span data-target="typing-effect.cursor" class="typing-effect-cursor" hidden="">|</span>
              </typing-effect>
              <form class="position-relative js-octocaptcha-parent" data-turbo="false" action="/reg.php"
                accept-charset="UTF-8" method="post"><input type="hidden" data-csrf="true" name="authenticity_token">
                <input type="hidden" name="return_to" id="return_to" autocomplete="off" class="form-control">
                <div id="email-container" class="js-continue-step-container signup-continue-step-container mt-4"
                  data-step-state="active">
                  <form action="complex_form.php" method="post" name="myForm" onsubmit="return(validate());">
                  </form>
            <form class="position-relative js-octocaptcha-parent" data-turbo="false" action="/myacademy/reg.php"
                    accept-charset="UTF-8" method="post"><input type="hidden" data-csrf="true"
                      name="authenticity_token">
                    <div class="mt-4">
                      <label for="nameSurname" class="text-mono signup-text-prompt">
                        Введите Имя и фамилию<sup aria-hidden="true">*</sup>
                      </label>
                    </div>
                    <div class="d-flex flex-items-center flex-column flex-sm-row">
                      <div class="d-flex flex-items-center width-full">
                        <span class="signup-continue-prompt mr-2" aria-hidden="true">
                        </span>
                        <td> <input type="text" name="r_nameSurname" class="textInput" /> </td>
                      </div>
                    </div>
                    <div class="mt-4">
                      <label for="email" class="text-mono signup-text-prompt">
                        Введите электронную почту
                      </label>
                    </div>
                    <div class="d-flex flex-items-center flex-column flex-sm-row">
                      <div class="d-flex flex-items-center width-full">
                        <span class="signup-continue-prompt mr-2" aria-hidden="true">
                        </span>
                        <td><input type="text" name="email" class="textInput" /></td>
                      </div>
                    </div>
                    <div class="mt-4">
                      <label for="password" class="text-mono signup-text-prompt">
                        Придумайте пароль<sup aria-hidden="true">*</sup>
                      </label>
                    </div>
                    <div class="d-flex flex-items-center flex-column flex-sm-row">
                      <div class="d-flex flex-items-center width-full">
                        <span class="signup-continue-prompt mr-2" aria-hidden="true"></span>
                        <visible-password class="flex-1 d-flex flex-items-center mr-3" data-catalyst="">
                          <td> <input type="password" name="r_password" class="textInput" /> </td>
                          <input type="hidden" data-csrf="true">
                        </visible-password>
                      </div>
                    </div>
                    <div class="mt-4">
                      <label for="login" class="text-mono signup-text-prompt">
                        Введите логин<sup aria-hidden="true">*</sup>
                      </label>
                    </div>
                    <div class="d-flex flex-items-center flex-column flex-sm-row">
                      <div class="d-flex flex-items-center width-full">
                        <span class="signup-continue-prompt mr-2" aria-hidden="true">
                        </span>
                        <td> <input type="text" name="r_login" class="textInput" /> </td>
                      </div>
                    </div>
                    <p id="demo" style="color:red; text-align:center"></p>
                    <div style="text-align:center"><input type="submit" name="r_send"
                        class="pd-total form-control signup-submit-button width-full py-2 js-octocaptcha-form-submit"
                        value="Создать аккаунт" />
					</div>
					<?php
            if (isset ($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
            </form>
               </div>
          </text-suggester>
        </div>
      </main>
    </div>
  </div>
</body>

</html>