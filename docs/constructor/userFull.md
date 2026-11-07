# userFull

**Description** : *Extended user info*

**Layer** : 229

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
| **noforwards_my_enabled** | [`flags2.23?true`](type/true) | If set, content protection » was enabled in this private chat by us |
| **noforwards_peer_enabled** | [`flags2.24?true`](type/true) | If set, content protection » was enabled in this private chat by this user |
| **unofficial_security_risk** | [`flags2.26?true`](type/true) | If set, this user uses an unofficial Telegram client, and messages sent to them may be less secure; clients should display a warning in the user's profile |
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
| **note** | [`flags2.22?TextWithEntities`](type/TextWithEntities) | A private note for this contact, only visible to us; see here » for more info on contact notes |
| **bot_manager_id** | [`flags2.25?long`](type/long) | If this user is a managed bot », the ID of the user or manager bot that manages it |

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
	id : -5458851462736580674,
	about : 'XUjno54AZbak1MJl',
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
		geo_distance : 33,
		request_chat_title : 'SDHP4v8oNCqwk7iE',
		request_chat_date : 10,
		business_bot_id : -5844697457180697004,
		business_bot_manage_url : 'https://docs.liveproto.dev',
		charge_paid_message_stars : -1710613941231911489,
		registration_month : '1DrRYvftjUL5JEFa',
		phone_country : '+1234567890',
		name_change_date : 96,
		photo_change_date : 74,
	),
	personal_photo : $client->photoEmpty(
		id : 2017679101710750714,
	),
	profile_photo : $client->photoEmpty(
		id : 3748438289313283585,
	),
	fallback_photo : $client->photoEmpty(
		id : -7147912420219785851,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : true,
		mute_until : 16,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : false,
		stories_hide_sender : false,
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
	bot_info : $client->botInfo(
		has_preview_medias : true,
		user_id : 305355716430653045,
		description : 'nX9R60f3b5mNqGl7',
		description_photo : $client->photoEmpty(
			id : 805673967318661665,
		),
		description_document : $client->documentEmpty(
			id : -4209568297622979634,
		),
		commands : array(
			$client->botCommand(
				ephemeral : true,
				command : '7Sz5mdAvIfyc9EOr',
				description : 'ispPzA3SU1yrkaxE',
			),
		),
		menu_button : $client->botMenuButtonDefault(),
		privacy_policy_url : 'https://docs.liveproto.dev',
		app_settings : $client->botAppSettings(
			placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			background_color : 50,
			background_dark_color : 29,
			header_color : 58,
			header_dark_color : 39,
		),
		verifier_settings : $client->botVerifierSettings(
			can_modify_custom_description : true,
			icon : 8895103456771286451,
			company : 'xhiZSHv7MX85bWRq',
			custom_description : 'vEUMAcwtRm1j0WVB',
		),
	),
	pinned_msg_id : 1,
	common_chats_count : 54,
	folder_id : 26,
	ttl_period : 57,
	theme : $client->chatTheme(
		emoticon : 'WI3fBFepXZJAQomc',
	),
	private_forward_name : 'JPzshKVAOQ9tSkE7',
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
		manage_linked_peers : true,
		manage_welcome_messages : true,
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
		manage_linked_peers : true,
		manage_welcome_messages : true,
	),
	wallpaper : $client->wallPaper(
		id : 1198708902867656137,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -2668846306089695096,
		slug : 'c0uWytfwiDqQMhbA',
		document : $client->documentEmpty(
			id : -3930826092027348471,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 30,
			second_background_color : 71,
			third_background_color : 81,
			fourth_background_color : 19,
			intensity : 56,
			rotation : 29,
			emoticon : 'xl71etiHEwavBYCL',
		),
	),
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : -7749567069580032228,
		),
		max_read_id : 12,
		stories : array(
			$client->storyItemDeleted(
				id : 81,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 34,
				date : 3,
				expire_date : 83,
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
				id : 9,
				date : 83,
				from_id : $client->peerUser(
					user_id : 3490064401601260376,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : '6DL90ahPAxSqXnFJ',
					story_id : 80,
				),
				expire_date : 22,
				caption : 'akotF89jlRbDfPXH',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 75,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 30,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 26,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 58,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 89,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 17,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 16,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 55,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 70,
						language : 'EVdztYfoHwiCBjeL',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 62,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 96,
						user_id : 60148156441582647,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 69,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 75,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 63,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 53,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 89,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 51,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 47,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 74,
						document_id : -2069819056656892841,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 70,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 46,
						date : 67,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 89,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 27,
						old_text : '79HNTOyVGhALjtbg',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 12,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'tSLMvNjkIofO7ml4',
						address : 'j1zVGti5KmlZokTN',
						provider : '874p3bEjNVAxmU6G',
						venue_id : 'SM7rhEJO9boAzl1W',
						venue_type : '1nRocZLW2xrSt8QM',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : 8026026209625402535,
						result_id : 'iYEjJtkRX9TwaueG',
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
						channel_id : 1434436246376419,
						msg_id : 79,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 97,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'KbJqInlakCr3tyNc',
						temperature_c : 1369170.0087890625,
						color : 24,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : '8cEvY5KwV9AgHonm',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(263494653434485739),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(-4628022245758232026),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(-6408491422932694812),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(-6282560224720975240),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 84,
					forwards_count : 53,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 75,
					recent_viewers : array(4129253345214851733),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(33),
				music : $client->documentEmpty(
					id : -5863616348234277513,
				),
			),
		),
	),
	business_work_hours : $client->businessWorkHours(
		open_now : true,
		timezone_id : 'aJGN4K8Tf7pivuyj',
		weekly_open : array(
			$client->businessWeeklyOpen(
				start_minute : 11,
				end_minute : 81,
			),
		),
	),
	business_location : $client->businessLocation(
		geo_point : $client->geoPointEmpty(),
		address : 'bfwrAtUcy04VORun',
	),
	business_greeting_message : $client->businessGreetingMessage(
		shortcut_id : 11,
		recipients : $client->businessRecipients(
			existing_chats : true,
			new_chats : true,
			contacts : true,
			non_contacts : true,
			exclude_selected : true,
			users : array(7595963452164626049),
		),
		no_activity_days : 86,
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
			users : array(-9202171386808956361),
		),
	),
	business_intro : $client->businessIntro(
		title : 'ODhIdoM7fAub1g3T',
		description : 'z21rDQVjngBklXYo',
		sticker : $client->documentEmpty(
			id : 8848806989240011022,
		),
	),
	birthday : $client->birthday(
		day : 38,
		month : 8,
		year : 70,
	),
	personal_channel_id : -664735304943936316,
	personal_channel_message : 43,
	stargifts_count : 3,
	starref_program : $client->starRefProgram(
		bot_id : 4703227525022268032,
		commission_permille : 36,
		duration_months : 23,
		end_date : 26,
		daily_revenue_per_user : $client->starsAmount(
			amount : 7533761884693768258,
			nanos : 32,
		),
	),
	bot_verification : $client->botVerification(
		bot_id : 5587300572610197251,
		icon : 1311917695246097006,
		description : 'EHwjyYufrXFNxDP3',
	),
	send_paid_messages_stars : -8104298925292895538,
	disallowed_gifts : $client->disallowedGiftsSettings(
		disallow_unlimited_stargifts : true,
		disallow_limited_stargifts : true,
		disallow_unique_stargifts : true,
		disallow_premium_gifts : true,
		disallow_stargifts_from_channels : true,
	),
	stars_rating : $client->starsRating(
		level : 9,
		current_level_stars : -6786926147723813343,
		stars : -3236181836997282298,
		next_level_stars : 4309652703875338132,
	),
	stars_my_pending_rating : $client->starsRating(
		level : 88,
		current_level_stars : -7992187370718743493,
		stars : 8587670727129477194,
		next_level_stars : 4910584159383548170,
	),
	stars_my_pending_rating_date : 71,
	main_tab : $client->profileTabPosts(),
	saved_music : $client->documentEmpty(
		id : -8088322591332951442,
	),
	note : $client->textWithEntities(
		text : 'JvZERAl6Y05gyzIw',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 67,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 10,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 74,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 97,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 76,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 43,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 52,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 100,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 46,
				language : 'dNsZRmzb80ErDtTi',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 10,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 39,
				user_id : -3073565671282099043,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 74,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 69,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 86,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 4,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 53,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 33,
				document_id : -3905832271809815178,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 21,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 37,
				date : 75,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 11,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 29,
				old_text : 'mUy6bKREGZ3efoTW',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 47,
			),
		),
	),
	bot_manager_id : -2249690813254187905,
);
```