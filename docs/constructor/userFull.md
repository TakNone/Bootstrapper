# userFull

**Description** : *Extended user info*

**Layer** : 218

```tl
userFull#a02bc13e flags:# blocked:flags.0?true phone_calls_available:flags.4?true phone_calls_private:flags.5?true can_pin_message:flags.7?true has_scheduled:flags.12?true video_calls_available:flags.13?true voice_messages_forbidden:flags.20?true translations_disabled:flags.23?true stories_pinned_available:flags.26?true blocked_my_stories_from:flags.27?true wallpaper_overridden:flags.28?true contact_require_premium:flags.29?true read_dates_private:flags.30?true flags2:# sponsored_enabled:flags2.7?true can_view_revenue:flags2.9?true bot_can_manage_emoji_status:flags2.10?true display_gifts_button:flags2.16?true id:long about:flags.1?string settings:PeerSettings personal_photo:flags.21?Photo profile_photo:flags.2?Photo fallback_photo:flags.22?Photo notify_settings:PeerNotifySettings bot_info:flags.3?BotInfo pinned_msg_id:flags.6?int common_chats_count:int folder_id:flags.11?int ttl_period:flags.14?int theme:flags.15?ChatTheme private_forward_name:flags.16?string bot_group_admin_rights:flags.17?ChatAdminRights bot_broadcast_admin_rights:flags.18?ChatAdminRights wallpaper:flags.24?WallPaper stories:flags.25?PeerStories business_work_hours:flags2.0?BusinessWorkHours business_location:flags2.1?BusinessLocation business_greeting_message:flags2.2?BusinessGreetingMessage business_away_message:flags2.3?BusinessAwayMessage business_intro:flags2.4?BusinessIntro birthday:flags2.5?Birthday personal_channel_id:flags2.6?long personal_channel_message:flags2.6?int stargifts_count:flags2.8?int starref_program:flags2.11?StarRefProgram bot_verification:flags2.12?BotVerification send_paid_messages_stars:flags2.14?long disallowed_gifts:flags2.15?DisallowedGiftsSettings stars_rating:flags2.17?StarsRating stars_my_pending_rating:flags2.18?StarsRating stars_my_pending_rating_date:flags2.18?int main_tab:flags2.20?ProfileTab saved_music:flags2.21?Document note:flags2.22?TextWithEntities = UserFull;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
| <mark>flags2</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 4871078443487425042,
	about : 'tX92VLIdE5gSxjfy',
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
		geo_distance : 70,
		request_chat_title : 'sWFDdbqByaMOUVve',
		request_chat_date : 28,
		business_bot_id : 4382549262731083661,
		business_bot_manage_url : 'https://docs.liveproto.dev',
		charge_paid_message_stars : -3334352225903892963,
		registration_month : 'pdLqZ6s1FMlXt49j',
		phone_country : '+1234567890',
		name_change_date : 13,
		photo_change_date : 89,
	),
	personal_photo : $client->photoEmpty(
		id : -230265635281709962,
	),
	profile_photo : $client->photoEmpty(
		id : -3425480314513779688,
	),
	fallback_photo : $client->photoEmpty(
		id : -7328197832971587634,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : false,
		mute_until : 45,
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
		user_id : -3785041741520754203,
		description : '4A67mTcIY2XSnVBG',
		description_photo : $client->photoEmpty(
			id : -1780106926199351034,
		),
		description_document : $client->documentEmpty(
			id : 5798159746317655675,
		),
		commands : array(
			$client->botCommand(
				command : 'XStjHob1uB7zLPQl',
				description : 'YoFvupSR582znbif',
			),
		),
		menu_button : $client->botMenuButtonDefault(),
		privacy_policy_url : 'https://docs.liveproto.dev',
		app_settings : $client->botAppSettings(
			placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			background_color : 6,
			background_dark_color : 2,
			header_color : 98,
			header_dark_color : 0,
		),
		verifier_settings : $client->botVerifierSettings(
			can_modify_custom_description : true,
			icon : 7336886975691741249,
			company : 'gUPYL71sIvTGrVxb',
			custom_description : 'gWwCihjKRTLVlO59',
		),
	),
	pinned_msg_id : 24,
	common_chats_count : 22,
	folder_id : 64,
	ttl_period : 31,
	theme : $client->chatTheme(
		emoticon : 'i4ROsuyLB1CdxgE8',
	),
	private_forward_name : 'Leph8zmUwNtux3Hv',
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
		id : 8965987465254802274,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 1951865438002739271,
		slug : 'nbCVPgD0uZ2toqyH',
		document : $client->documentEmpty(
			id : -1533666007427178285,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 59,
			second_background_color : 89,
			third_background_color : 70,
			fourth_background_color : 92,
			intensity : 26,
			rotation : 46,
			emoticon : '9DXtzVuGwMgJrQbi',
		),
	),
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : -9081739110844600734,
		),
		max_read_id : 4,
		stories : array(
			$client->storyItemDeleted(
				id : 3,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 4,
				date : 52,
				expire_date : 0,
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
				id : 53,
				date : 3,
				from_id : $client->peerUser(
					user_id : -7042696478443429797,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'vhLBufwdrnYT2cUJ',
					story_id : 14,
				),
				expire_date : 98,
				caption : 'kO9VseS13MLB0A8E',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 71,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 31,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 14,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 31,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 0,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 84,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 4,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 100,
						language : 'm5oOrH2ZGKENXDlk',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 26,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 61,
						user_id : 5842775799357743552,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 57,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 21,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 97,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 71,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 93,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 57,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 83,
						document_id : -2298840932458223434,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 11,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'Gda62mLxJoRNTtDl',
						address : '2iVwhBSHbZO61xln',
						provider : 'JHebyMRk5DFVdTCS',
						venue_id : 'JrtgIl93A76yLUo0',
						venue_type : 'UiQ4VhaH82GZoBvg',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : 7798386055117438438,
						result_id : 'OM75ai0vtYqpZExP',
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
						channel_id : -5712055987158364068,
						msg_id : 18,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(peer : '@LiveProto'),
						msg_id : 88,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'oEf6Pe4xZ2ykBYm3',
						temperature_c : 1421759.92578125,
						color : 89,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'cLtag2EGsKAQpWVn',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(906250789882752485),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(-5428287857344396877),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(8467489807550617322),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(-6029875328122853614),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 7,
					forwards_count : 56,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 100,
					recent_viewers : array(7651504624069382519),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(62),
			),
		),
	),
	business_work_hours : $client->businessWorkHours(
		open_now : true,
		timezone_id : 'cVedrAFQbs0OSlpR',
		weekly_open : array(
			$client->businessWeeklyOpen(
				start_minute : 65,
				end_minute : 46,
			),
		),
	),
	business_location : $client->businessLocation(
		geo_point : $client->geoPointEmpty(),
		address : 'GK6E1lieNTVacYFs',
	),
	business_greeting_message : $client->businessGreetingMessage(
		shortcut_id : 37,
		recipients : $client->businessRecipients(
			existing_chats : true,
			new_chats : true,
			contacts : true,
			non_contacts : true,
			exclude_selected : true,
			users : array(-1715387532583868941),
		),
		no_activity_days : 75,
	),
	business_away_message : $client->businessAwayMessage(
		offline_only : true,
		shortcut_id : 48,
		schedule : $client->businessAwayMessageScheduleAlways(),
		recipients : $client->businessRecipients(
			existing_chats : true,
			new_chats : true,
			contacts : true,
			non_contacts : true,
			exclude_selected : true,
			users : array(5253852087172967909),
		),
	),
	business_intro : $client->businessIntro(
		title : 'JKFmObETHkX1Ch5N',
		description : 'g8n5ZSFTxa1MpNfJ',
		sticker : $client->documentEmpty(
			id : 7937711431204075960,
		),
	),
	birthday : $client->birthday(
		day : 3,
		month : 32,
		year : 35,
	),
	personal_channel_id : -4100336404408910076,
	personal_channel_message : 89,
	stargifts_count : 87,
	starref_program : $client->starRefProgram(
		bot_id : 4393425562232893341,
		commission_permille : 85,
		duration_months : 45,
		end_date : 100,
		daily_revenue_per_user : $client->starsAmount(
			amount : 6548144508640343641,
			nanos : 74,
		),
	),
	bot_verification : $client->botVerification(
		bot_id : -3522942383119832300,
		icon : -8417909781494516479,
		description : 'iGJsEujUzDVX9B08',
	),
	send_paid_messages_stars : 3221419184270787187,
	disallowed_gifts : $client->disallowedGiftsSettings(
		disallow_unlimited_stargifts : true,
		disallow_limited_stargifts : true,
		disallow_unique_stargifts : true,
		disallow_premium_gifts : true,
		disallow_stargifts_from_channels : true,
	),
	stars_rating : $client->starsRating(
		level : 73,
		current_level_stars : 4775075431191029934,
		stars : 2478144669339265157,
		next_level_stars : 4588230266659880705,
	),
	stars_my_pending_rating : $client->starsRating(
		level : 3,
		current_level_stars : -4209897265102994960,
		stars : 7061130262343446264,
		next_level_stars : -1764962220794122530,
	),
	stars_my_pending_rating_date : 99,
	main_tab : $client->profileTabPosts(),
	saved_music : $client->documentEmpty(
		id : -2601440581041596344,
	),
	note : $client->textWithEntities(
		text : '0XwMq1SZCvzyeAxH',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 8,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 21,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 51,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 99,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 7,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 81,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 65,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 8,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 33,
				language : 'toQ67URvyJ92jhBg',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 4,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 76,
				user_id : -2904476606962906362,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 24,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 100,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 89,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 77,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 87,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 48,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 2,
				document_id : -4806681961938039127,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 6,
			),
		),
	),
);
```