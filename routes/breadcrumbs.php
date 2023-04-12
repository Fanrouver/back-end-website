<?php

// Dashboard
Breadcrumbs::for('home', function ($trail) {
    $trail->push(__('home.dashboard'), route('home'));
});

// Dashboard > > aboutUs Management
Breadcrumbs::for('aboutUs.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('About Us Management'), route('aboutUs.index'));
});

// Dashboard > > aboutUs Management > Create
Breadcrumbs::for('aboutUs.create', function ($trail) {
    $trail->parent('aboutUs.index');
    $trail->push(__('common.btn.create'), route('aboutUs.create'));
});

// Dashboard > > aboutUs Management > Edit
Breadcrumbs::for('aboutUs.edit', function ($trail, $about) {
    $trail->parent('aboutUs.index');
    $trail->push(__('common.btn.edit'), route('aboutUs.edit', $about));
});

// Dashboard > AppVersions
Breadcrumbs::for('appVersions.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appVersions'), route('appVersions.index'));
});

// Dashboard > AppVersions > Create
Breadcrumbs::for('appVersions.create', function ($trail) {
    $trail->parent('appVersions.index');
    $trail->push(__('common.btn.create'), route('appVersions.create'));
});

// Dashboard > AppVersions > Edit
Breadcrumbs::for('appVersions.edit', function ($trail, $product) {
    $trail->parent('appVersions.index');
    $trail->push(__('common.btn.edit'), route('appVersions.edit', $product));
});

// Dashboard > Banner Management
Breadcrumbs::for('banners.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.bannerManagement'), route('banners.index'));
});

// Dashboard > Banner Management > Create
Breadcrumbs::for('banners.create', function ($trail) {
    $trail->parent('banners.index');
    $trail->push(__('common.btn.create'), route('banners.create'));
});

// Dashboard > Banner Management > Edit
Breadcrumbs::for('banners.edit', function ($trail, $banner) {
    $trail->parent('banners.index');
    $trail->push(__('common.btn.edit'), route('banners.edit', $banner));
});

// Dashboard > Campaign Management
Breadcrumbs::for('campaigns.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.campaignManagement'), route('campaigns.index'));
});

// Dashboard > Campaign Management > Create
Breadcrumbs::for('campaigns.create', function ($trail) {
    $trail->parent('campaigns.index');
    $trail->push(__('common.btn.create'), route('campaigns.create'));
});

// Dashboard > Campaign Management > Edit
Breadcrumbs::for('campaigns.edit', function ($trail, $campaign) {
    $trail->parent('campaigns.index');
    $trail->push(__('common.btn.edit'), route('campaigns.edit', $campaign));
});

// Dashboard > > FAQ Management
Breadcrumbs::for('faqs.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.faqManagement'), route('faqs.index'));
});

// Dashboard > > FAQ Management > Create
Breadcrumbs::for('faqs.create', function ($trail) {
    $trail->parent('faqs.index');
    $trail->push(__('common.btn.create'), route('faqs.create'));
});

// Dashboard > > FAQ Management > Edit
Breadcrumbs::for('faqs.edit', function ($trail, $faq) {
    $trail->parent('faqs.index');
    $trail->push(__('common.btn.edit'), route('faqs.edit', $faq));
});

// Dashboard > Game Management
Breadcrumbs::for('games.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.gameManagement'), route('games.index'));
});

// Dashboard > Game Management > Create
Breadcrumbs::for('games.create', function ($trail) {
    $trail->parent('games.index');
    $trail->push(__('common.btn.create'), route('games.create'));
});

// Dashboard > Game Management > Edit
Breadcrumbs::for('games.edit', function ($trail, $game) {
    $trail->parent('games.index');
    $trail->push(__('common.btn.edit'), route('games.edit', $game));
});

// Dashboard > Game Rewards Management > Rewards
Breadcrumbs::for('rewards.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.gameRewardsManagement'), '');
    $trail->push(__('sidebar.rewards'), route('rewards.index'));
});

// Dashboard > Game Rewards Management > Rewards > Create
Breadcrumbs::for('rewards.create', function ($trail) {
    $trail->parent('rewards.index');
    $trail->push(__('common.btn.create'), route('rewards.create'));
});

// Dashboard > Game Rewards Management > Rewards > Edit
Breadcrumbs::for('rewards.edit', function ($trail, $reward) {
    $trail->parent('rewards.index');
    $trail->push(__('common.btn.edit'), route('rewards.edit', $reward));
});

// Dashboard > Game Rewards Management > RewardItems
Breadcrumbs::for('rewardItems.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.gameRewardsManagement'), '');
    $trail->push(__('sidebar.rewardItems'), route('rewardItems.index'));
});

// Dashboard > Game Rewards Management > RewardItems > Create
Breadcrumbs::for('rewardItems.create', function ($trail) {
    $trail->parent('rewardItems.index');
    $trail->push(__('common.btn.create'), route('rewardItems.create'));
});

// Dashboard > Game Rewards Management > RewardItems > Edit
Breadcrumbs::for('rewardItems.edit', function ($trail, $rewardItem) {
    $trail->parent('rewardItems.index');
    $trail->push(__('common.btn.edit'), route('rewardItems.edit', $rewardItem));
});

// Dashboard > Game Rewards Management > RewardItemTypes
Breadcrumbs::for('rewardItemTypes.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.gameRewardsManagement'), '');
    $trail->push(__('sidebar.rewardItemTypes'), route('rewardItemTypes.index'));
});

// Dashboard > Game Rewards Management > RewardItemTypes > Create
Breadcrumbs::for('rewardItemTypes.create', function ($trail) {
    $trail->parent('rewardItemTypes.index');
    $trail->push(__('common.btn.create'), route('rewardItemTypes.create'));
});

// Dashboard > Game Rewards Management > RewardItemTypes > Edit
Breadcrumbs::for('rewardItemTypes.edit', function ($trail, $rewardItem) {
    $trail->parent('rewardItemTypes.index');
    $trail->push(__('common.btn.edit'), route('rewardItemTypes.edit', $rewardItem));
});

// Dashboard > Game Rewards Management > RewardTypes
Breadcrumbs::for('rewardTypes.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.gameRewardsManagement'), '');
    $trail->push(__('sidebar.rewardTypes'), route('rewardTypes.index'));
});

// Dashboard > Game Rewards Management > RewardTypes > Create
Breadcrumbs::for('rewardTypes.create', function ($trail) {
    $trail->parent('rewardTypes.index');
    $trail->push(__('common.btn.create'), route('rewardTypes.create'));
});

// Dashboard > Game Rewards Management > RewardTypes > Edit
Breadcrumbs::for('rewardTypes.edit', function ($trail, $rewardType) {
    $trail->parent('rewardTypes.index');
    $trail->push(__('common.btn.edit'), route('rewardTypes.edit', $rewardType));
});

// Dashboard > Inbox Messaging
Breadcrumbs::for('inboxMessages.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.inboxMessaging'), route('inboxMessages.index'));
});

// Dashboard > Inbox Messaging > Create
Breadcrumbs::for('inboxMessages.create', function ($trail) {
    $trail->parent('inboxMessages.index');
    $trail->push(__('common.btn.create'), route('inboxMessages.create'));
});

// Dashboard > Inbox Messaging > Edit
Breadcrumbs::for('inboxMessages.edit', function ($trail, $inboxMessage) {
    $trail->parent('inboxMessages.index');
    $trail->push(__('common.btn.edit'), route('inboxMessages.edit', $inboxMessage));
});

// Dashboard > privacyPolicies
Breadcrumbs::for('privacyPolicies.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.privacyPolicies'), route('privacyPolicies.index'));
});

// Dashboard > privacyPolicies > Create
Breadcrumbs::for('privacyPolicies.create', function ($trail) {
    $trail->parent('privacyPolicies.index');
    $trail->push(__('common.btn.create'), route('privacyPolicies.create'));
});

// Dashboard > privacyPolicies > Show
Breadcrumbs::for('privacyPolicies.show', function ($trail, $privacyPolicies) {
    $trail->parent('privacyPolicies.index');
    $trail->push(__('privacyPolicies.show'), route('privacyPolicies.show', $privacyPolicies));
});

// Dashboard > privacyPolicies > Edit
Breadcrumbs::for('privacyPolicies.edit', function ($trail, $privacyPolicies) {
    $trail->parent('privacyPolicies.index');
    $trail->push(__('common.btn.edit'), route('privacyPolicies.edit', $privacyPolicies));
});

// Dashboard > Products
Breadcrumbs::for('products.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.productManagement'), route('products.index'));
});

// Dashboard > Products > Create
Breadcrumbs::for('products.create', function ($trail) {
    $trail->parent('products.index');
    $trail->push(__('common.btn.create'), route('products.create'));
});

// Dashboard > Products > Add Bulk
Breadcrumbs::for('products.import', function ($trail) {
    $trail->parent('products.index');
    $trail->push(__('products.addBulk'), route('products.addBulk'));
});

// Dashboard > Products > Edit
Breadcrumbs::for('products.edit', function ($trail, $product) {
    $trail->parent('products.index');
    $trail->push(__('common.btn.edit'), route('products.edit', $product));
});

// Dashboard > SimCard > Activation
// Breadcrumbs::for('simCardActivations.index', function ($trail) {
//     $trail->parent('home');
//     $trail->push(__('sidebar.simCards'), '');
//     $trail->push(__('sidebar.simCardActivations'), route('simCardActivations.index'));
// });

// Dashboard > SimCard > Show
// Breadcrumbs::for('simCardActivations.show', function ($trail, $simCardActivation) {
//     $trail->parent('simCardActivations.index');
//     $trail->push(__('simCardActivations.show'), route('simCardActivations.show', $simCardActivation));
// });

// Dashboard > PromoCodes
Breadcrumbs::for('promoCodes.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.promoCodeManagement'), route('promoCodes.index'));
});

// Dashboard > PromoCodes > Create
Breadcrumbs::for('promoCodes.create', function ($trail) {
    $trail->parent('promoCodes.index');
    $trail->push(__('common.btn.create'), route('promoCodes.create'));
});

// Dashboard > PromoCodes > Show
Breadcrumbs::for('promoCodes.report.index', function ($trail, $promoCode) {
    $trail->parent('promoCodes.index');
    $trail->push(__('promoCodes.report'), route('promoCodes.report.index', $promoCode));
});

// Dashboard > PromoCodes > Edit
Breadcrumbs::for('promoCodes.edit', function ($trail, $promoCode) {
    $trail->parent('promoCodes.index');
    $trail->push(__('common.btn.edit'), route('promoCodes.edit', $promoCode));
});

// Dashboard > PromotionNews
Breadcrumbs::for('promotionNews.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.promotionNewsManagement'), route('promotionNews.index'));
});

// Dashboard > PromoCodes > Create
Breadcrumbs::for('promotionNews.create', function ($trail) {
    $trail->parent('promotionNews.index');
    $trail->push(__('common.btn.create'), route('promotionNews.create'));
});

// Dashboard > PromoCodes > Show
Breadcrumbs::for('promotionNews.show', function ($trail, $promotionNews) {
    $trail->parent('promotionNews.index');
    $trail->push(__('promotionNews.show'), route('promotionNews.show', $promotionNews));
});

// Dashboard > PromoCodes > Edit
Breadcrumbs::for('promotionNews.edit', function ($trail, $promotionNews) {
    $trail->parent('promotionNews.index');
    $trail->push(__('common.btn.edit'), route('promotionNews.edit', $promotionNews));
});

// Dashboard > Self-Care Centers
Breadcrumbs::for('selfCareCenters.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.selfCareCenterManagement'), route('selfCareCenters.index'));
});

// Dashboard > Self-Care Centers > Create
Breadcrumbs::for('selfCareCenters.create', function ($trail) {
    $trail->parent('selfCareCenters.index');
    $trail->push(__('common.btn.create'), route('selfCareCenters.create'));
});

// Dashboard > Self-Care Centers > Edit
Breadcrumbs::for('selfCareCenters.edit', function ($trail, $selfCareCenter) {
    $trail->parent('selfCareCenters.index');
    $trail->push(__('common.btn.edit'), route('selfCareCenters.edit', $selfCareCenter));
});

// Dashboard > Self-Care Centers > Add Bulk
Breadcrumbs::for('selfCareCenters.import', function ($trail) {
    $trail->parent('selfCareCenters.index');
    $trail->push(__('selfCareCenters.addBulk'), route('selfCareCenters.addBulk'));
});

// Dashboard > SmsMasterLibraries
Breadcrumbs::for('smsMasterLibraries.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.smsMasterLibraries'), route('smsMasterLibraries.index'));
});

// Dashboard > SmsMasterLibraries > Create
Breadcrumbs::for('smsMasterLibraries.create', function ($trail) {
    $trail->parent('smsMasterLibraries.index');
    $trail->push(__('common.btn.create'), route('smsMasterLibraries.create'));
});

// Dashboard > SmsMasterLibraries > Edit
Breadcrumbs::for('smsMasterLibraries.edit', function ($trail, $smsMasterLibrary) {
    $trail->parent('smsMasterLibraries.index');
    $trail->push(__('common.btn.edit'), route('smsMasterLibraries.edit', $smsMasterLibrary));
});

// Dashboard > TermCondition
Breadcrumbs::for('termConditions.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.termConditions'), route('termConditions.index'));
});

// Dashboard > TermCondition > Create
Breadcrumbs::for('termConditions.create', function ($trail) {
    $trail->parent('termConditions.index');
    $trail->push(__('common.btn.create'), route('termConditions.create'));
});

// Dashboard > TermCondition > Edit
Breadcrumbs::for('termConditions.edit', function ($trail, $termCondition) {
    $trail->parent('termConditions.index');
    $trail->push(__('common.btn.edit'), route('termConditions.edit', $termCondition));
});

/*************************************
 * APP SETUP
 ************************************/ 

// Dashboard > App Setup > BannerTypes
Breadcrumbs::for('bannerTypes.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.bannerTypes'), route('bannerTypes.index'));
});

// Dashboard > App Setup > BannerTypes > Create
Breadcrumbs::for('bannerTypes.create', function ($trail) {
    $trail->parent('bannerTypes.index');
    $trail->push(__('common.btn.create'), route('bannerTypes.create'));
});

// Dashboard > App Setup > BannerTypes > Edit
Breadcrumbs::for('bannerTypes.edit', function ($trail, $bannerType) {
    $trail->parent('bannerTypes.index');
    $trail->push(__('common.btn.edit'), route('bannerTypes.edit', $bannerType));
});

// Dashboard > App Setup > CampaignGameRewards
Breadcrumbs::for('campaignGameRewards.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.campaignGameRewards'), route('campaignGameRewards.index'));
});

// Dashboard > App Setup > CampaignGameRewards > Create
Breadcrumbs::for('campaignGameRewards.create', function ($trail) {
    $trail->parent('campaignGameRewards.index');
    $trail->push(__('common.btn.create'), route('campaignGameRewards.create'));
});

// Dashboard > App Setup > CampaignGameRewards > Edit
Breadcrumbs::for('campaignGameRewards.edit', function ($trail, $campaignGameReward) {
    $trail->parent('campaignGameRewards.index');
    $trail->push(__('common.btn.edit'), route('campaignGameRewards.edit', $campaignGameReward));
});

// Dashboard > App Setup > Cities
Breadcrumbs::for('cities.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.cities'), route('cities.index'));
});

// Dashboard > App Setup > Cities > Create
Breadcrumbs::for('cities.create', function ($trail) {
    $trail->parent('cities.index');
    $trail->push(__('common.btn.create'), route('cities.create'));
});

// Dashboard > App Setup > Cities > Edit
Breadcrumbs::for('cities.edit', function ($trail, $city) {
    $trail->parent('cities.index');
    $trail->push(__('common.btn.edit'), route('cities.edit', $city));
});

// Dashboard > App Setup > Countries
Breadcrumbs::for('countries.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.countries'), route('countries.index'));
});

// Dashboard > App Setup > Countries > Create
Breadcrumbs::for('countries.create', function ($trail) {
    $trail->parent('countries.index');
    $trail->push(__('common.btn.create'), route('countries.create'));
});

// Dashboard > App Setup > Countries > Edit
Breadcrumbs::for('countries.edit', function ($trail, $permission) {
    $trail->parent('countries.index');
    $trail->push(__('common.btn.edit'), route('countries.edit', $permission));
});

// Dashboard > App Setup > FAQ Categories
Breadcrumbs::for('faqCategories.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.faqCategories'), route('faqCategories.index'));
});

// Dashboard > App Setup > FAQ Categories > Create
Breadcrumbs::for('faqCategories.create', function ($trail) {
    $trail->parent('faqCategories.index');
    $trail->push(__('common.btn.create'), route('faqCategories.create'));
});

// Dashboard > App Setup > FAQ Categories > Edit
Breadcrumbs::for('faqCategories.edit', function ($trail, $faqCategory) {
    $trail->parent('faqCategories.index');
    $trail->push(__('common.btn.edit'), route('faqCategories.edit', $faqCategory));
});

// Dashboard > App Setup > Game Settings
Breadcrumbs::for('gameSettings.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.gameSettings'), route('gameSettings.index'));
});

// Dashboard > App Setup > Game Settings > Create
Breadcrumbs::for('gameSettings.create', function ($trail) {
    $trail->parent('gameSettings.index');
    $trail->push(__('common.btn.create'), route('gameSettings.create'));
});

// Dashboard > App Setup > Game Settings > Edit
Breadcrumbs::for('gameSettings.edit', function ($trail, $gameSetting) {
    $trail->parent('gameSettings.index');
    $trail->push(__('common.btn.edit'), route('gameSettings.edit', $gameSetting));
});

// Dashboard > App Setup > Happy Hour Backgrounds
Breadcrumbs::for('happyHourBackgrounds.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.happyHourBackgrounds'), route('happyHourBackgrounds.index'));
});

// Dashboard > App Setup > Happy Hour Backgrounds > Create
Breadcrumbs::for('happyHourBackgrounds.create', function ($trail) {
    $trail->parent('happyHourBackgrounds.index');
    $trail->push(__('common.btn.create'), route('happyHourBackgrounds.create'));
});

// Dashboard > App Setup > Happy Hour Backgrounds > Edit
Breadcrumbs::for('happyHourBackgrounds.edit', function ($trail, $happyHourBackground) {
    $trail->parent('happyHourBackgrounds.index');
    $trail->push(__('common.btn.edit'), route('happyHourBackgrounds.edit', $happyHourBackground));
});

// Dashboard > App Setup > Maintenances
Breadcrumbs::for('maintenances.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.maintenance'), route('maintenances.index'));
});

// Dashboard > App Setup > Maintenances > Create
Breadcrumbs::for('maintenances.create', function ($trail) {
    $trail->parent('maintenances.index');
    $trail->push(__('common.btn.create'), route('maintenances.create'));
});

// Dashboard > App Setup > Maintenances > Edit
Breadcrumbs::for('maintenances.edit', function ($trail, $maintenance) {
    $trail->parent('maintenances.index');
    $trail->push(__('common.btn.edit'), route('maintenances.edit', $maintenance));
});

// Dashboard > App Setup > PrivacyPolicyCategories
Breadcrumbs::for('privacyPolicyCategories.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.privacyPolicyCategories'), route('privacyPolicyCategories.index'));
});

// Dashboard > App Setup > PrivacyPolicyCategories > Create
Breadcrumbs::for('privacyPolicyCategories.create', function ($trail) {
    $trail->parent('privacyPolicyCategories.index');
    $trail->push(__('common.btn.create'), route('privacyPolicyCategories.create'));
});

// Dashboard > App Setup > PrivacyPolicyCategories > Edit
Breadcrumbs::for('privacyPolicyCategories.edit', function ($trail, $privacyPolicyCategories) {
    $trail->parent('privacyPolicyCategories.index');
    $trail->push(__('common.btn.edit'), route('privacyPolicyCategories.edit', $privacyPolicyCategories));
});

// Dashboard > App Setup > ProductCategories
Breadcrumbs::for('productCategories.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.productCategories'), route('productCategories.index'));
});

// Dashboard > App Setup > ProductCategories > Create
Breadcrumbs::for('productCategories.create', function ($trail) {
    $trail->parent('productCategories.index');
    $trail->push(__('common.btn.create'), route('productCategories.create'));
});

// Dashboard > App Setup > ProductCategories > Edit
Breadcrumbs::for('productCategories.edit', function ($trail, $productCategory) {
    $trail->parent('productCategories.index');
    $trail->push(__('common.btn.edit'), route('productCategories.edit', $productCategory));
});

// Dashboard > App Setup > PromotionNewsCategories
Breadcrumbs::for('promotionNewsCategories.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.promotionNewsCategories'), route('promotionNewsCategories.index'));
});

// Dashboard > App Setup > PromotionNewsCategories > Create
Breadcrumbs::for('promotionNewsCategories.create', function ($trail) {
    $trail->parent('promotionNewsCategories.index');
    $trail->push(__('common.btn.create'), route('promotionNewsCategories.create'));
});

// Dashboard > App Setup > PromotionNewsCategories > Edit
Breadcrumbs::for('promotionNewsCategories.edit', function ($trail, $promotionNewsCategories) {
    $trail->parent('promotionNewsCategories.index');
    $trail->push(__('common.btn.edit'), route('promotionNewsCategories.edit', $promotionNewsCategories));
});

// Dashboard > App Setup > SmsMasterLibraryCategory
Breadcrumbs::for('smsMasterLibraryCategories.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.smsMasterLibraryCategories'), route('smsMasterLibraryCategories.index'));
});

// Dashboard > App Setup > SmsMasterLibraryCategory > Create
Breadcrumbs::for('smsMasterLibraryCategories.create', function ($trail) {
    $trail->parent('smsMasterLibraryCategories.index');
    $trail->push(__('common.btn.create'), route('smsMasterLibraryCategories.create'));
});

// Dashboard > App Setup > SmsMasterLibraryCategory > Edit
Breadcrumbs::for('smsMasterLibraryCategories.edit', function ($trail, $smsMasterLibraryCategory) {
    $trail->parent('smsMasterLibraryCategories.index');
    $trail->push(__('common.btn.edit'), route('smsMasterLibraryCategories.edit', $smsMasterLibraryCategory));
});

// Dashboard > App Setup > States
Breadcrumbs::for('states.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.states'), route('states.index'));
});

// Dashboard > App Setup > States > Create
Breadcrumbs::for('states.create', function ($trail) {
    $trail->parent('states.index');
    $trail->push(__('common.btn.create'), route('states.create'));
});

// Dashboard > App Setup > States > Edit
Breadcrumbs::for('states.edit', function ($trail, $state) {
    $trail->parent('states.index');
    $trail->push(__('common.btn.edit'), route('states.edit', $state));
});

// Dashboard > App Setup > StatusForBanner
Breadcrumbs::for('bannerStatuses.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.bannerStatuses'), route('bannerStatuses.index'));
});

// Dashboard > App Setup > StatusForBanner > Create
Breadcrumbs::for('bannerStatuses.create', function ($trail) {
    $trail->parent('bannerStatuses.index');
    $trail->push(__('common.btn.create'), route('bannerStatuses.create'));
});

// Dashboard > App Setup > StatusForBanner > Edit
Breadcrumbs::for('bannerStatuses.edit', function ($trail, $bannerStatus) {
    $trail->parent('bannerStatuses.index');
    $trail->push(__('common.btn.edit'), route('bannerStatuses.edit', $bannerStatus));
});

// Dashboard > App Setup > StatusForPromotionNewsStatuses
Breadcrumbs::for('promotionNewsStatuses.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.promotionNewsStatuses'), route('promotionNewsStatuses.index'));
});

// Dashboard > App Setup > StatusForPromotionNewsStatuses > Create
Breadcrumbs::for('promotionNewsStatuses.create', function ($trail) {
    $trail->parent('promotionNewsStatuses.index');
    $trail->push(__('common.btn.create'), route('promotionNewsStatuses.create'));
});

// Dashboard > App Setup > StatusForPromotionNewsStatuses > Edit
Breadcrumbs::for('promotionNewsStatuses.edit', function ($trail, $promotionNewsStatus) {
    $trail->parent('promotionNewsStatuses.index');
    $trail->push(__('common.btn.edit'), route('promotionNewsStatuses.edit', $promotionNewsStatus));
});

// Dashboard > App Setup > StatusForSimCardActivations
Breadcrumbs::for('simCardActivationStatuses.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.simCardActivationStatuses'), route('simCardActivationStatuses.index'));
});

// Dashboard > App Setup > StatusForSimCardActivations > Create
Breadcrumbs::for('simCardActivationStatuses.create', function ($trail) {
    $trail->parent('simCardActivationStatuses.index');
    $trail->push(__('common.btn.create'), route('simCardActivationStatuses.create'));
});

// Dashboard > App Setup > StatusForSimCardActivations > Edit
Breadcrumbs::for('simCardActivationStatuses.edit', function ($trail, $simCardActivationStatus) {
    $trail->parent('simCardActivationStatuses.index');
    $trail->push(__('common.btn.edit'), route('simCardActivationStatuses.edit', $simCardActivationStatus));
});

// Dashboard > App Setup > TermConditionCategories
Breadcrumbs::for('termConditionCategories.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.appSetup'), '');
    $trail->push(__('sidebar.termConditionCategories'), route('termConditionCategories.index'));
});

// Dashboard > App Setup > TermConditionCategories > Create
Breadcrumbs::for('termConditionCategories.create', function ($trail) {
    $trail->parent('termConditionCategories.index');
    $trail->push(__('common.btn.create'), route('termConditionCategories.create'));
});

// Dashboard > App Setup > TermConditionCategories > Edit
Breadcrumbs::for('termConditionCategories.edit', function ($trail, $termConditionCategory) {
    $trail->parent('termConditionCategories.index');
    $trail->push(__('common.btn.edit'), route('termConditionCategories.edit', $termConditionCategory));
});

/*************************************
 * CMS & BACKEND MANAGEMENT
 ************************************/ 

// Dashboard > Users > Admins
Breadcrumbs::for('users.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.users'), '');
    $trail->push(__('sidebar.admin'), route('users.index'));
});

// Dashboard > Users > Admins > Create
Breadcrumbs::for('users.create', function ($trail) {
    $trail->parent('users.index');
    $trail->push(__('common.btn.create'), route('users.create'));
});

// Dashboard > Users > Admins > Edit
Breadcrumbs::for('users.edit', function ($trail, $user) {
    $trail->parent('users.index');
    $trail->push(__('common.btn.edit'), route('users.edit', $user));
});

// Dashboard > Roles
Breadcrumbs::for('roles.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.roles'), route('roles.index'));
});

// Dashboard > Roles > Create
Breadcrumbs::for('roles.create', function ($trail) {
    $trail->parent('roles.index');
    $trail->push(__('common.btn.create'), route('roles.create'));
});

// Dashboard > Roles > Edit
Breadcrumbs::for('roles.edit', function ($trail, $role) {
    $trail->parent('roles.index');
    $trail->push(__('common.btn.edit'), route('roles.edit', $role));
});

/*************************************
 * CMS & BACKEND SETUP
 ************************************/ 

// Dashboard > CMS Setup > OauthXOX
Breadcrumbs::for('oauthXOX.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.cmsBackendSetup'), '');
    $trail->push(__('sidebar.oauthXOX'), route('oauthXOX.index'));
});

// Dashboard > CMS Setup > OauthXOX > Create
Breadcrumbs::for('oauthXOX.create', function ($trail) {
    $trail->parent('oauthXOX.index');
    $trail->push(__('common.btn.create'), route('oauthXOX.create'));
});

// Dashboard > CMS Setup > OauthXOX > Edit
Breadcrumbs::for('oauthXOX.edit', function ($trail, $oauthXOX) {
    $trail->parent('oauthXOX.index');
    $trail->push(__('common.btn.edit'), route('oauthXOX.edit', $oauthXOX));
});

// Dashboard > CMS Setup > MiddlewareAuthentications
Breadcrumbs::for('middlewareAuthentications.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.cmsBackendSetup'), '');
    $trail->push(__('sidebar.middlewareAuthentications'), route('middlewareAuthentications.index'));
});

// Dashboard > CMS Setup > MiddlewareAuthentications > Create
Breadcrumbs::for('middlewareAuthentications.create', function ($trail) {
    $trail->parent('middlewareAuthentications.index');
    $trail->push(__('common.btn.create'), route('middlewareAuthentications.create'));
});

// Dashboard > CMS Setup > MiddlewareAuthentications > Edit
Breadcrumbs::for('middlewareAuthentications.edit', function ($trail, $middlewareAuthentication) {
    $trail->parent('middlewareAuthentications.index');
    $trail->push(__('common.btn.edit'), route('middlewareAuthentications.edit', $middlewareAuthentication));
});

// Dashboard > CMS Setup > Permissions
Breadcrumbs::for('permissions.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.cmsBackendSetup'), '');
    $trail->push(__('sidebar.permissions'), route('permissions.index'));
});

// Dashboard > CMS Setup > Permissions > Create
Breadcrumbs::for('permissions.create', function ($trail) {
    $trail->parent('permissions.index');
    $trail->push(__('common.btn.create'), route('permissions.create'));
});

// Dashboard > CMS Setup > Permissions > Edit
Breadcrumbs::for('permissions.edit', function ($trail, $permission) {
    $trail->parent('permissions.index');
    $trail->push(__('common.btn.edit'), route('permissions.edit', $permission));
});

// Dashboard > CMS Setup > Ipay88Credential
Breadcrumbs::for('ipay88Credentials.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.cmsBackendSetup'), '');
    $trail->push(__('sidebar.ipay88Credentials'), route('ipay88Credentials.index'));
});

// Dashboard > CMS Setup > Ipay88Credential > Create
Breadcrumbs::for('ipay88Credentials.create', function ($trail) {
    $trail->parent('ipay88Credentials.index');
    $trail->push(__('common.btn.create'), route('ipay88Credentials.create'));
});

// Dashboard > CMS Setup > Ipay88Credential > Edit
Breadcrumbs::for('ipay88Credentials.edit', function ($trail, $ipay88Credential) {
    $trail->parent('ipay88Credentials.index');
    $trail->push(__('common.btn.edit'), route('ipay88Credentials.edit', $ipay88Credential));
});

/*************************************
 * REPORTS
 ************************************/ 

// Dashboard > Reports > apiLog 
Breadcrumbs::for('apiLog.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.reports'), '');
    $trail->push(__('sidebar.apiLog'), route('apiLog.index'));
});

// Dashboard > Reports > Audit 
Breadcrumbs::for('audit.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.reports'), '');
    $trail->push(__('sidebar.audit'), route('audit.index'));
});

// Dashboard > Reports > App Report 
Breadcrumbs::for('appReport.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.reports'), '');
    $trail->push(__('sidebar.appReport'), route('appReport.index'));
});

// Dashboard > Reports > Contact Us 
Breadcrumbs::for('contactUs.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.reports'), '');
    $trail->push(__('sidebar.contactUs'), route('contactUs.index'));
});

// Dashboard > Reports > Payment Transactions 
Breadcrumbs::for('paymentTransactionLogs.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('sidebar.reports'), '');
    $trail->push(__('sidebar.paymentTransactions'), route('paymentTransactionLogs.index'));
});

