# userFull

**Description** : *Extended user info*

**Layer** : 227

```tl
userFull#6cbe645 flags:# blocked:flags.0?true phone_calls_available:flags.4?true phone_calls_private:flags.5?true can_pin_message:flags.7?true has_scheduled:flags.12?true video_calls_available:flags.13?true voice_messages_forbidden:flags.20?true translations_disabled:flags.23?true stories_pinned_available:flags.26?true blocked_my_stories_from:flags.27?true wallpaper_overridden:flags.28?true contact_require_premium:flags.29?true read_dates_private:flags.30?true flags2:# sponsored_enabled:flags2.7?true can_view_revenue:flags2.9?true bot_can_manage_emoji_status:flags2.10?true display_gifts_button:flags2.16?true noforwards_my_enabled:flags2.23?true noforwards_peer_enabled:flags2.24?true unofficial_security_risk:flags2.26?true id:long about:flags.1?string settings:PeerSettings personal_photo:flags.21?Photo profile_photo:flags.2?Photo fallback_photo:flags.22?Photo notify_settings:PeerNotifySettings bot_info:flags.3?BotInfo pinned_msg_id:flags.6?int common_chats_count:int folder_id:flags.11?int ttl_period:flags.14?int theme:flags.15?ChatTheme private_forward_name:flags.16?string bot_group_admin_rights:flags.17?ChatAdminRights bot_broadcast_admin_rights:flags.18?ChatAdminRights wallpaper:flags.24?WallPaper stories:flags.25?PeerStories business_work_hours:flags2.0?BusinessWorkHours business_location:flags2.1?BusinessLocation business_greeting_message:flags2.2?BusinessGreetingMessage business_away_message:flags2.3?BusinessAwayMessage business_intro:flags2.4?BusinessIntro birthday:flags2.5?Birthday personal_channel_id:flags2.6?long personal_channel_message:flags2.6?int stargifts_count:flags2.8?int starref_program:flags2.11?StarRefProgram bot_verification:flags2.12?BotVerification send_paid_messages_stars:flags2.14?long disallowed_gifts:flags2.15?DisallowedGiftsSettings stars_rating:flags2.17?StarsRating stars_my_pending_rating:flags2.18?StarsRating stars_my_pending_rating_date:flags2.18?int main_tab:flags2.20?ProfileTab saved_music:flags2.21?Document note:flags2.22?TextWithEntities bot_manager_id:flags2.25?long = UserFull;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **blocked** | [`flags.0?true`](type/true) | Whether you have blocked this user |
| **phone_calls_available** | [`flags.4?true`](type/true) | Whether this user can make VoIP calls |
| **phone_calls_private** | [`flags.5?true`](type/true) | Whether this user's privacy settings allow you to call them |
| **can_pin_message** | [`flags.7?true`](type/true) | Whether you can pin messages in the chat with this user, you can do this only for a chat with yourself |
| **has_scheduled** | [`flags.12?true`](type/true) | Whether scheduled messages are available |
| **video_calls_available** | [`flags.13?true`](type/true) | Whether the user can receive video calls |
| **voice_messages_forbidden** | [`flags.20?true`](type/true) | Whether this user doesn't allow sending voice messages in a private chat with them |
| **translations_disabled** | [`flags.23?true`](type/true) | Whether the real-time chat translation popup should be hidden |
| **stories_pinned_available** | [`flags.26?true`](type/true) | Whether this user has some pinned stories |
| **blocked_my_stories_from** | [`flags.27?true`](type/true) | Whether we've blocked this user, preventing them from seeing our stories » |
| **wallpaper_overridden** | [`flags.28?true`](type/true) | Whether the other user has chosen a custom wallpaper for us using messages.setChatWallPaper and the for_both flag, see here » for more info |
| **contact_require_premium** | [`flags.29?true`](type/true) | If set, we cannot write to this user: subscribe to Telegram Premium to get permission to write to this user. To set this flag for ourselves invoke account.setGlobalPrivacySettings, setting the settings.new_noncontact_peers_require_premium flag, see here » for more info |
| **read_dates_private** | [`flags.30?true`](type/true) | If set, we cannot fetch the exact read date of messages we send to this user using messages.getOutboxReadDate.  The exact read date of messages might still be unavailable for other reasons, see here » for more info.  To set this flag for ourselves invoke account.setGlobalPrivacySettings, setting the settings.hide_read_marks flag |
| <del style = 'opacity : 0.4'>flags2</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **sponsored_enabled** | [`flags2.7?true`](type/true) | Whether ads were re-enabled for the current account (only accessible to the currently logged-in user), see here » for more info |
| **can_view_revenue** | [`flags2.9?true`](type/true) | If set, this user can view ad revenue statistics » for this bot |
| **bot_can_manage_emoji_status** | [`flags2.10?true`](type/true) | If set, this is a bot that can change our emoji status » |
| **display_gifts_button** | [`flags2.16?true`](type/true) | If this flag is set for both us and another user (changed through globalPrivacySettings), a gift button should always be displayed in the text field in private chats with the other user: once clicked, the gift UI should be displayed, offering the user options to gift Telegram Premium » subscriptions or Telegram Gifts » |
| **noforwards_my_enabled** | [`flags2.23?true`](type/true) | NOTHING |
| **noforwards_peer_enabled** | [`flags2.24?true`](type/true) | NOTHING |
| **unofficial_security_risk** | [`flags2.26?true`](type/true) | NOTHING |
| <mark>id</mark> | [`long`](type/long) | User ID |
| **about** | [`flags.1?string`](type/string) | Bio of the user |
| <mark>settings</mark> | [`PeerSettings`](type/PeerSettings) | Peer settings |
| **personal_photo** | [`flags.21?Photo`](type/Photo) | Personal profile photo, to be shown instead of profile_photo |
| **profile_photo** | [`flags.2?Photo`](type/Photo) | Profile photo |
| **fallback_photo** | [`flags.22?Photo`](type/Photo) | Fallback profile photo, displayed if no photo is present in profile_photo or personal_photo, due to privacy settings |
| <mark>notify_settings</mark> | [`PeerNotifySettings`](type/PeerNotifySettings) | Notification settings |
| **bot_info** | [`flags.3?BotInfo`](type/BotInfo) | For bots, info about the bot (bot commands, etc) |
| **pinned_msg_id** | [`flags.6?int`](type/int) | Message ID of the last pinned message |
| <mark>common_chats_count</mark> | [`int`](type/int) | Chats in common with this user |
| **folder_id** | [`flags.11?int`](type/int) | Peer folder ID, for more info click here |
| **ttl_period** | [`flags.14?int`](type/int) | Time To Live of all messages in this chat; once a message is this many seconds old, it must be deleted |
| **theme** | [`flags.15?ChatTheme`](type/ChatTheme) | The chat theme associated with this user » |
| **private_forward_name** | [`flags.16?string`](type/string) | Anonymized text to be shown instead of the user's name on forwarded messages |
| **bot_group_admin_rights** | [`flags.17?ChatAdminRights`](type/ChatAdminRights) | A suggested set of administrator rights for the bot, to be shown when adding the bot as admin to a group, see here for more info on how to handle them » |
| **bot_broadcast_admin_rights** | [`flags.18?ChatAdminRights`](type/ChatAdminRights) | A suggested set of administrator rights for the bot, to be shown when adding the bot as admin to a channel, see here for more info on how to handle them » |
| **wallpaper** | [`flags.24?WallPaper`](type/WallPaper) | Wallpaper to use in the private chat with the user |
| **stories** | [`flags.25?PeerStories`](type/PeerStories) | Active stories » |
| **business_work_hours** | [`flags2.0?BusinessWorkHours`](type/BusinessWorkHours) | Telegram Business working hours » |
| **business_location** | [`flags2.1?BusinessLocation`](type/BusinessLocation) | Telegram Business location » |
| **business_greeting_message** | [`flags2.2?BusinessGreetingMessage`](type/BusinessGreetingMessage) | Telegram Business greeting message » |
| **business_away_message** | [`flags2.3?BusinessAwayMessage`](type/BusinessAwayMessage) | Telegram Business away message » |
| **business_intro** | [`flags2.4?BusinessIntro`](type/BusinessIntro) | Specifies a custom Telegram Business profile introduction » |
| **birthday** | [`flags2.5?Birthday`](type/Birthday) | Contains info about the user's birthday » |
| **personal_channel_id** | [`flags2.6?long`](type/long) | ID of the associated personal channel », that should be shown in the profile page |
| **personal_channel_message** | [`flags2.6?int`](type/int) | ID of the latest message of the associated personal channel », that should be previewed in the profile page |
| **stargifts_count** | [`flags2.8?int`](type/int) | Number of gifts the user has chosen to display on their profile |
| **starref_program** | [`flags2.11?StarRefProgram`](type/StarRefProgram) | This bot has an active referral program » |
| **bot_verification** | [`flags2.12?BotVerification`](type/BotVerification) | Describes a bot verification icon » |
| **send_paid_messages_stars** | [`flags2.14?long`](type/long) | If set and bigger than 0, this user has enabled paid messages » and we must pay the specified amount of Stars to send messages to them, see here » for the full flow. If set and equal to 0, the user requires payment in general but we were exempted from paying for any of the reasons specified in the docs » |
| **disallowed_gifts** | [`flags2.15?DisallowedGiftsSettings`](type/DisallowedGiftsSettings) | Disallows the reception of specific gift types |
| **stars_rating** | [`flags2.17?StarsRating`](type/StarsRating) | The user's star rating |
| **stars_my_pending_rating** | [`flags2.18?StarsRating`](type/StarsRating) | Our pending star rating, only visible for ourselves |
| **stars_my_pending_rating_date** | [`flags2.18?int`](type/int) | When the pending star rating will be applied, only visible for ourselves |
| **main_tab** | [`flags2.20?ProfileTab`](type/ProfileTab) | The main tab for the user's profile, see here » for more info |
| **saved_music** | [`flags2.21?Document`](type/Document) | The first song on the music tab of the profile, see here » for more info on the music profile tab |
| **note** | [`flags2.22?TextWithEntities`](type/TextWithEntities) | NOTHING |
| **bot_manager_id** | [`flags2.25?long`](type/long) | NOTHING |

---

## Type

[UserFull](type/UserFull)

---

## Example

```php
$userFull = $client->userFull(
	blocked : true,
	phone_calls_available : true,
	phone_calls_private : true,
	can_pin_message : true,
	has_scheduled : true,
	video_calls_available : true,
	voice_messages_forbidden : true,
	translations_disabled : true,
	stories_pinned_available : true,
	blocked_my_stories_from : true,
	wallpaper_overridden : true,
	contact_require_premium : true,
	read_dates_private : true,
	sponsored_enabled : true,
	can_view_revenue : true,
	bot_can_manage_emoji_status : true,
	display_gifts_button : true,
	noforwards_my_enabled : true,
	noforwards_peer_enabled : true,
	unofficial_security_risk : true,
	id : -7896394281468422014,
	about : '4fzb7itc5AevVrH2',
	settings : $client->peerSettings(
		report_spam : true,
		add_contact : true,
		block_contact : true,
		share_contact : true,
		need_contacts_exception : true,
		report_geo : true,
		autoarchived : true,
		invite_members : true,
		request_chat_broadcast : true,
		business_bot_paused : true,
		business_bot_can_reply : true,
		geo_distance : 85,
		request_chat_title : 'YBq6z5N0sRVrZCg7',
		request_chat_date : 35,
		business_bot_id : -5893286116780151137,
		business_bot_manage_url : 'https://docs.liveproto.dev',
		charge_paid_message_stars : 404347232509273461,
		registration_month : 'VgzN3eTXjInR57JO',
		phone_country : '+1234567890',
		name_change_date : 17,
		photo_change_date : 85,
	),
	personal_photo : $client->photoEmpty(
		id : -7263023285282618366,
	),
	profile_photo : $client->photoEmpty(
		id : 2421544082276014071,
	),
	fallback_photo : $client->photoEmpty(
		id : -3602500365207110703,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : false,
		mute_until : 12,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : false,
		stories_hide_sender : true,
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
	bot_info : $client->botInfo(
		has_preview_medias : true,
		user_id : 6462819088452172132,
		description : 'L4xnNVIdMUhWr9gX',
		description_photo : $client->photoEmpty(
			id : 518649129730801544,
		),
		description_document : $client->documentEmpty(
			id : 8505975565853202901,
		),
		commands : array(
			$client->botCommand(
				command : '7jv0nsm2kfVi5wgQ',
				description : '7CDAt52qeETk6aXO',
			),
		),
		menu_button : $client->botMenuButtonDefault(),
		privacy_policy_url : 'https://docs.liveproto.dev',
		app_settings : $client->botAppSettings(
			placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			background_color : 88,
			background_dark_color : 64,
			header_color : 48,
			header_dark_color : 70,
		),
		verifier_settings : $client->botVerifierSettings(
			can_modify_custom_description : true,
			icon : 6746020974664726370,
			company : 'UAfB67jzcGDVsxQk',
			custom_description : '3rcdYCyjBKTWLm2N',
		),
	),
	pinned_msg_id : 14,
	common_chats_count : 0,
	folder_id : 8,
	ttl_period : 17,
	theme : $client->chatTheme(
		emoticon : '7PEoCWyUk3MGJs1f',
	),
	private_forward_name : 'XoOU0LfN4WrdtFZe',
	bot_group_admin_rights : $client->chatAdminRights(
		change_info : true,
		post_messages : true,
		edit_messages : true,
		delete_messages : true,
		ban_users : true,
		invite_users : true,
		pin_messages : true,
		add_admins : true,
		anonymous : true,
		manage_call : true,
		other : true,
		manage_topics : true,
		post_stories : true,
		edit_stories : true,
		delete_stories : true,
		manage_direct_messages : true,
		manage_ranks : true,
	),
	bot_broadcast_admin_rights : $client->chatAdminRights(
		change_info : true,
		post_messages : true,
		edit_messages : true,
		delete_messages : true,
		ban_users : true,
		invite_users : true,
		pin_messages : true,
		add_admins : true,
		anonymous : true,
		manage_call : true,
		other : true,
		manage_topics : true,
		post_stories : true,
		edit_stories : true,
		delete_stories : true,
		manage_direct_messages : true,
		manage_ranks : true,
	),
	wallpaper : $client->wallPaper(
		id : 2342432845921713787,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 85768143942494120,
		slug : 'SJDy4gukWKdh8PxR',
		document : $client->documentEmpty(
			id : 3355389013718845803,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 49,
			second_background_color : 56,
			third_background_color : 61,
			fourth_background_color : 54,
			intensity : 73,
			rotation : 100,
			emoticon : 'Ld3w0nW7VDkYv5uh',
		),
	),
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : 5897206918330299918,
		),
		max_read_id : 52,
		stories : array(
			$client->storyItemDeleted(
				id : 25,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 53,
				date : 22,
				expire_date : 85,
			),
			$client->storyItem(
				pinned : true,
				public : true,
				close_friends : true,
				min : true,
				noforwards : true,
				edited : true,
				contacts : true,
				selected_contacts : true,
				out : true,
				id : 39,
				date : 24,
				from_id : $client->peerUser(
					user_id : 5189609226367633230,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'l3POjnsqWBpcXy9i',
					story_id : 44,
				),
				expire_date : 19,
				caption : 'cBiPY1lMyjSx7Knw',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 8,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 92,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 0,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 69,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 9,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 61,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 34,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 10,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 48,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 49,
						language : 'hmOl0a2u4dzPZgNY',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 0,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 99,
						user_id : -2539191266796363177,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 79,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 17,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 9,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 99,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 62,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 84,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 7,
						document_id : -401573564924429039,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 98,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 59,
						date : 12,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 27,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 95,
						old_text : 'Wfs4YPiythC1JQag',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 55,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'bAxKMIcivOtdlhws',
						address : 'v6EsJ42dTwu0Vomb',
						provider : '57gvG6JUyOQrc9F0',
						venue_id : 'iXelFZfmanT1wOuk',
						venue_type : 'VNf5PTosHFnXYDKO',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : -5946948940630761989,
						result_id : '2Wiqhr5uYUnPFLpl',
					),
					$client->mediaAreaGeoPoint(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						address : $client->geoPointAddress(...),
					),
					$client->mediaAreaSuggestedReaction(
						dark : true,
						flipped : true,
						coordinates : $client->mediaAreaCoordinates(...),
						reaction : $client->reactionEmpty(...),
					),
					$client->mediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel_id : -2922049985513353918,
						msg_id : 65,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 44,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'D4YWrM0iXSzgPmvj',
						temperature_c : 610918.0009765625,
						color : 87,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'GeV0JBdUb1iam7sR',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(5616277573689714088),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(7704906195152270320),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(71987481856446536),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(2805739495618249976),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 81,
					forwards_count : 90,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 84,
					recent_viewers : array(-2374442363172019908),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(97),
				music : $client->documentEmpty(
					id : -845971128555232265,
				),
			),
		),
	),
	business_work_hours : $client->businessWorkHours(
		open_now : true,
		timezone_id : 'uNMtvGKnLqHEI8FC',
		weekly_open : array(
			$client->businessWeeklyOpen(
				start_minute : 14,
				end_minute : 17,
			),
		),
	),
	business_location : $client->businessLocation(
		geo_point : $client->geoPointEmpty(),
		address : 'DOK0Wvy4LkpcBm9w',
	),
	business_greeting_message : $client->businessGreetingMessage(
		shortcut_id : 2,
		recipients : $client->businessRecipients(
			existing_chats : true,
			new_chats : true,
			contacts : true,
			non_contacts : true,
			exclude_selected : true,
			users : array(-2768832559702481814),
		),
		no_activity_days : 90,
	),
	business_away_message : $client->businessAwayMessage(
		offline_only : true,
		shortcut_id : 89,
		schedule : $client->businessAwayMessageScheduleAlways(),
		recipients : $client->businessRecipients(
			existing_chats : true,
			new_chats : true,
			contacts : true,
			non_contacts : true,
			exclude_selected : true,
			users : array(-3903177800801353158),
		),
	),
	business_intro : $client->businessIntro(
		title : 'YwrhUuS9J2OFZG5t',
		description : 't9ashnbAvGM1qVCz',
		sticker : $client->documentEmpty(
			id : 4547221009367805288,
		),
	),
	birthday : $client->birthday(
		day : 71,
		month : 67,
		year : 41,
	),
	personal_channel_id : 8363336954983493568,
	personal_channel_message : 87,
	stargifts_count : 7,
	starref_program : $client->starRefProgram(
		bot_id : -7811786971122628213,
		commission_permille : 1,
		duration_months : 53,
		end_date : 13,
		daily_revenue_per_user : $client->starsAmount(
			amount : 110357918149033093,
			nanos : 13,
		),
	),
	bot_verification : $client->botVerification(
		bot_id : -7290318728995756609,
		icon : -4804290936078781602,
		description : '0QzYCRAmjGuvHW4O',
	),
	send_paid_messages_stars : 1800734818605379657,
	disallowed_gifts : $client->disallowedGiftsSettings(
		disallow_unlimited_stargifts : true,
		disallow_limited_stargifts : true,
		disallow_unique_stargifts : true,
		disallow_premium_gifts : true,
		disallow_stargifts_from_channels : true,
	),
	stars_rating : $client->starsRating(
		level : 72,
		current_level_stars : 6968154242156987417,
		stars : -2902799945564464861,
		next_level_stars : 7385583811240392814,
	),
	stars_my_pending_rating : $client->starsRating(
		level : 86,
		current_level_stars : 7898137614870642812,
		stars : 500446411058030806,
		next_level_stars : 6526563866482433674,
	),
	stars_my_pending_rating_date : 97,
	main_tab : $client->profileTabPosts(),
	saved_music : $client->documentEmpty(
		id : -1357979091104793453,
	),
	note : $client->textWithEntities(
		text : 'TB8bo0fCyQplzAwq',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 98,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 93,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 1,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 92,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 91,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 31,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 91,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 30,
				language : 'uLS43XcrlwBMi0De',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 44,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 63,
				user_id : -1667540363693869662,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 42,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 35,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 11,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 94,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 86,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 47,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 0,
				document_id : -1017420340498985672,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 64,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 33,
				date : 93,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 80,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 99,
				old_text : 'ZEAlc4XB7YQoT5FP',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 34,
			),
		),
	),
	bot_manager_id : -9065858025015154014,
);
```