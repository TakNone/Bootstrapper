# userFull

**Description** : *Extended user info*

**Layer** : 222

```tl
userFull#a02bc13e flags:# blocked:flags.0?true phone_calls_available:flags.4?true phone_calls_private:flags.5?true can_pin_message:flags.7?true has_scheduled:flags.12?true video_calls_available:flags.13?true voice_messages_forbidden:flags.20?true translations_disabled:flags.23?true stories_pinned_available:flags.26?true blocked_my_stories_from:flags.27?true wallpaper_overridden:flags.28?true contact_require_premium:flags.29?true read_dates_private:flags.30?true flags2:# sponsored_enabled:flags2.7?true can_view_revenue:flags2.9?true bot_can_manage_emoji_status:flags2.10?true display_gifts_button:flags2.16?true id:long about:flags.1?string settings:PeerSettings personal_photo:flags.21?Photo profile_photo:flags.2?Photo fallback_photo:flags.22?Photo notify_settings:PeerNotifySettings bot_info:flags.3?BotInfo pinned_msg_id:flags.6?int common_chats_count:int folder_id:flags.11?int ttl_period:flags.14?int theme:flags.15?ChatTheme private_forward_name:flags.16?string bot_group_admin_rights:flags.17?ChatAdminRights bot_broadcast_admin_rights:flags.18?ChatAdminRights wallpaper:flags.24?WallPaper stories:flags.25?PeerStories business_work_hours:flags2.0?BusinessWorkHours business_location:flags2.1?BusinessLocation business_greeting_message:flags2.2?BusinessGreetingMessage business_away_message:flags2.3?BusinessAwayMessage business_intro:flags2.4?BusinessIntro birthday:flags2.5?Birthday personal_channel_id:flags2.6?long personal_channel_message:flags2.6?int stargifts_count:flags2.8?int starref_program:flags2.11?StarRefProgram bot_verification:flags2.12?BotVerification send_paid_messages_stars:flags2.14?long disallowed_gifts:flags2.15?DisallowedGiftsSettings stars_rating:flags2.17?StarsRating stars_my_pending_rating:flags2.18?StarsRating stars_my_pending_rating_date:flags2.18?int main_tab:flags2.20?ProfileTab saved_music:flags2.21?Document note:flags2.22?TextWithEntities = UserFull;
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
	id : 302286460531304071,
	about : 'bhGJX9Ea1kv56Ff3',
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
		geo_distance : 51,
		request_chat_title : 'AUo0KtkW5gRBh4Qf',
		request_chat_date : 43,
		business_bot_id : 3605714361371698797,
		business_bot_manage_url : 'https://docs.liveproto.dev',
		charge_paid_message_stars : -6622426748284863820,
		registration_month : '9bHRI1FumkQdgaj0',
		phone_country : '+1234567890',
		name_change_date : 4,
		photo_change_date : 13,
	),
	personal_photo : $client->photoEmpty(
		id : -3856076916942818731,
	),
	profile_photo : $client->photoEmpty(
		id : 7705105754684139967,
	),
	fallback_photo : $client->photoEmpty(
		id : -1241482615495196015,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : false,
		mute_until : 81,
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
		user_id : -8060420297792386361,
		description : '7JHoai361zMyVLwf',
		description_photo : $client->photoEmpty(
			id : -2999342947564053104,
		),
		description_document : $client->documentEmpty(
			id : -1606248377715440331,
		),
		commands : array(
			$client->botCommand(
				command : 'fgpNVOW5AYj3QkqG',
				description : 'UHrLVCI6q52Phabc',
			),
		),
		menu_button : $client->botMenuButtonDefault(),
		privacy_policy_url : 'https://docs.liveproto.dev',
		app_settings : $client->botAppSettings(
			placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			background_color : 95,
			background_dark_color : 5,
			header_color : 21,
			header_dark_color : 24,
		),
		verifier_settings : $client->botVerifierSettings(
			can_modify_custom_description : true,
			icon : 8607956085013885804,
			company : 'ICUEa7teTinlZBfN',
			custom_description : 'OClDVB8yHq5eNnrZ',
		),
	),
	pinned_msg_id : 14,
	common_chats_count : 15,
	folder_id : 22,
	ttl_period : 88,
	theme : $client->chatTheme(
		emoticon : 'GhTAZECia7FowRDW',
	),
	private_forward_name : 'SYFOAP8967EJhmKa',
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
	),
	wallpaper : $client->wallPaper(
		id : 3867987595022099527,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 3979508246982631360,
		slug : 'tKF0LBCHXxiG318w',
		document : $client->documentEmpty(
			id : -1977231706551845470,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 21,
			second_background_color : 30,
			third_background_color : 35,
			fourth_background_color : 74,
			intensity : 4,
			rotation : 78,
			emoticon : 'yGTvn49qUsZNO3SA',
		),
	),
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : 6937160975969166711,
		),
		max_read_id : 36,
		stories : array(
			$client->storyItemDeleted(
				id : 4,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 22,
				date : 32,
				expire_date : 70,
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
				id : 81,
				date : 41,
				from_id : $client->peerUser(
					user_id : 6644951917288578876,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'vNIXzprxhafdAwk7',
					story_id : 83,
				),
				expire_date : 20,
				caption : 'LGszrKZ194wCEI76',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 0,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 80,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 17,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 35,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 42,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 97,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 75,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 66,
						language : '1dXyBJksi56WboIt',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 80,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 24,
						user_id : -5422734325372545524,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 86,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 40,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 50,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 37,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 1,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 32,
						document_id : -5275297026018119023,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 89,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'fNWS46IkqdGUQO1y',
						address : 'vrmiTdFoQO3CRI6h',
						provider : 't3mfo1d4MEPFyQUp',
						venue_id : 'lF8EMrQTwipqDBGf',
						venue_type : 'geTcvJ26D5K7qsn4',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : 5618998454325881524,
						result_id : 'nFO0yboHtPECeqI3',
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
						channel_id : -2202972637595123737,
						msg_id : 27,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 33,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'nLCzYDgTdl2f6XHU',
						temperature_c : 188561.8720703125,
						color : 68,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'akFAtJD62rTXv5pc',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(8503256206596736721),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(4725176095238843132),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(-6671918993798370666),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(-3171621610230235923),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 18,
					forwards_count : 47,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 64,
					recent_viewers : array(417934113622588070),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(60),
			),
		),
	),
	business_work_hours : $client->businessWorkHours(
		open_now : true,
		timezone_id : 'GlrqLy06CwVzxiMn',
		weekly_open : array(
			$client->businessWeeklyOpen(
				start_minute : 64,
				end_minute : 14,
			),
		),
	),
	business_location : $client->businessLocation(
		geo_point : $client->geoPointEmpty(),
		address : '9vePdIOMfCHbWY8B',
	),
	business_greeting_message : $client->businessGreetingMessage(
		shortcut_id : 74,
		recipients : $client->businessRecipients(
			existing_chats : true,
			new_chats : true,
			contacts : true,
			non_contacts : true,
			exclude_selected : true,
			users : array(3084881932824400130),
		),
		no_activity_days : 1,
	),
	business_away_message : $client->businessAwayMessage(
		offline_only : true,
		shortcut_id : 64,
		schedule : $client->businessAwayMessageScheduleAlways(),
		recipients : $client->businessRecipients(
			existing_chats : true,
			new_chats : true,
			contacts : true,
			non_contacts : true,
			exclude_selected : true,
			users : array(685651093335896992),
		),
	),
	business_intro : $client->businessIntro(
		title : 'owgAbaV7JpZ0ORLu',
		description : 'DGKtmPn9xiu4L36c',
		sticker : $client->documentEmpty(
			id : 9051463513198936565,
		),
	),
	birthday : $client->birthday(
		day : 89,
		month : 66,
		year : 62,
	),
	personal_channel_id : -8001145225233860505,
	personal_channel_message : 83,
	stargifts_count : 28,
	starref_program : $client->starRefProgram(
		bot_id : 1703375904957494840,
		commission_permille : 42,
		duration_months : 41,
		end_date : 93,
		daily_revenue_per_user : $client->starsAmount(
			amount : -6394113821231125533,
			nanos : 83,
		),
	),
	bot_verification : $client->botVerification(
		bot_id : -8862691216705864409,
		icon : 2790620043763903450,
		description : 'txGd17aMNkWSh8m5',
	),
	send_paid_messages_stars : -5140142124770797177,
	disallowed_gifts : $client->disallowedGiftsSettings(
		disallow_unlimited_stargifts : true,
		disallow_limited_stargifts : true,
		disallow_unique_stargifts : true,
		disallow_premium_gifts : true,
		disallow_stargifts_from_channels : true,
	),
	stars_rating : $client->starsRating(
		level : 84,
		current_level_stars : -5026490505324432217,
		stars : -5851917736550390866,
		next_level_stars : -3100355890719990434,
	),
	stars_my_pending_rating : $client->starsRating(
		level : 21,
		current_level_stars : -5410076533023748991,
		stars : 8428344520360668626,
		next_level_stars : -6804597669414806437,
	),
	stars_my_pending_rating_date : 74,
	main_tab : $client->profileTabPosts(),
	saved_music : $client->documentEmpty(
		id : -2995542250535484204,
	),
	note : $client->textWithEntities(
		text : 'hLqQWxBXPEfFtuKC',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 84,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 38,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 91,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 57,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 8,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 76,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 47,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 58,
				language : 'E4pfKFCULTJyPwYk',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 1,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 36,
				user_id : 7523369308493282579,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 88,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 91,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 56,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 18,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 16,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 26,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 70,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 19,
				document_id : 1196008123397881398,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 69,
			),
		),
	),
);
```