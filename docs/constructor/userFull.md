# userFull

**Description** : *Extended user info*

**Layer** : 225

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
	id : 3737804763863641902,
	about : 'GTrsIFEK20Ov93w4',
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
		geo_distance : 55,
		request_chat_title : 'GUkmYtCxRudTIphL',
		request_chat_date : 20,
		business_bot_id : 8947329725220838738,
		business_bot_manage_url : 'https://docs.liveproto.dev',
		charge_paid_message_stars : 6769769762957183490,
		registration_month : 'UNmEB5dFALgs6le0',
		phone_country : '+1234567890',
		name_change_date : 3,
		photo_change_date : 98,
	),
	personal_photo : $client->photoEmpty(
		id : -6161626616085946023,
	),
	profile_photo : $client->photoEmpty(
		id : 7678587304910355111,
	),
	fallback_photo : $client->photoEmpty(
		id : 8863732369871915725,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : true,
		mute_until : 52,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : true,
		stories_hide_sender : false,
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
	bot_info : $client->botInfo(
		has_preview_medias : true,
		user_id : -8219281360853288347,
		description : 'f1iXu8PYAoG6JMa0',
		description_photo : $client->photoEmpty(
			id : 3026527519340897491,
		),
		description_document : $client->documentEmpty(
			id : -8505937354982702678,
		),
		commands : array(
			$client->botCommand(
				command : 'RrOxXPAWIoNc4Q9H',
				description : '9ThC6BFYcwIOey7n',
			),
		),
		menu_button : $client->botMenuButtonDefault(),
		privacy_policy_url : 'https://docs.liveproto.dev',
		app_settings : $client->botAppSettings(
			placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			background_color : 14,
			background_dark_color : 89,
			header_color : 47,
			header_dark_color : 93,
		),
		verifier_settings : $client->botVerifierSettings(
			can_modify_custom_description : true,
			icon : -5096454489330677675,
			company : '0pCGoAiDmLrOVMN8',
			custom_description : 'PGsKmVnekdptjW7S',
		),
	),
	pinned_msg_id : 45,
	common_chats_count : 92,
	folder_id : 67,
	ttl_period : 51,
	theme : $client->chatTheme(
		emoticon : '3Mcw92kgeUJqvoWY',
	),
	private_forward_name : '6f0upn5QblmywAZN',
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
		id : -1150013685701066625,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 8463467852400067323,
		slug : 'E56eCsoAlWVOYBSf',
		document : $client->documentEmpty(
			id : -7274091165086553493,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 39,
			second_background_color : 43,
			third_background_color : 80,
			fourth_background_color : 8,
			intensity : 93,
			rotation : 83,
			emoticon : 'PK2m7M1pV6kXyYD8',
		),
	),
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : 4730751703909387822,
		),
		max_read_id : 13,
		stories : array(
			$client->storyItemDeleted(
				id : 3,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 34,
				date : 78,
				expire_date : 44,
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
				id : 64,
				date : 18,
				from_id : $client->peerUser(
					user_id : 4696771236826790514,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : '7F4AMedtZ0z3NysE',
					story_id : 10,
				),
				expire_date : 18,
				caption : 'tbPgzaFvm69op20M',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 91,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 77,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 55,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 87,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 12,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 69,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 82,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 38,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 90,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 0,
						language : 'mtBlCej3Qf7JFv1w',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 29,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 84,
						user_id : 4631207554856345988,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 93,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 46,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 86,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 99,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 22,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 5,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 22,
						document_id : -6375118416216643717,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 82,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 10,
						date : 97,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 64,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 66,
						old_text : 'oRLe2NiIGUPdEOw6',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 94,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'HlibSXErqxfgLDWv',
						address : 'cgwb3Ra4dSVsThYl',
						provider : 'x5cG32orUflhWX7y',
						venue_id : 'BZMu0LyTkcmdgr1R',
						venue_type : 'kFaKvtTGd1X3jI5u',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : -1966918531332744642,
						result_id : 'iIjR8NP9zWdthfDH',
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
						channel_id : 4683192021934117984,
						msg_id : 58,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 3,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'ZwctJVl7M05YpUO6',
						temperature_c : 1141405.271484375,
						color : 10,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'bF4I9scm5xA3ajHr',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(-6707532367466156818),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(-2464848344638005011),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(-910490417100737329),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(1522300697061933950),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 10,
					forwards_count : 24,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 70,
					recent_viewers : array(2248758360807245142),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(15),
				music : $client->documentEmpty(
					id : -4979528717229318960,
				),
			),
		),
	),
	business_work_hours : $client->businessWorkHours(
		open_now : true,
		timezone_id : 'vQMEDqysAhpHxIn9',
		weekly_open : array(
			$client->businessWeeklyOpen(
				start_minute : 89,
				end_minute : 82,
			),
		),
	),
	business_location : $client->businessLocation(
		geo_point : $client->geoPointEmpty(),
		address : 'ajkflWhSI91ziHg4',
	),
	business_greeting_message : $client->businessGreetingMessage(
		shortcut_id : 24,
		recipients : $client->businessRecipients(
			existing_chats : true,
			new_chats : true,
			contacts : true,
			non_contacts : true,
			exclude_selected : true,
			users : array(-273180648531051473),
		),
		no_activity_days : 1,
	),
	business_away_message : $client->businessAwayMessage(
		offline_only : true,
		shortcut_id : 16,
		schedule : $client->businessAwayMessageScheduleAlways(),
		recipients : $client->businessRecipients(
			existing_chats : true,
			new_chats : true,
			contacts : true,
			non_contacts : true,
			exclude_selected : true,
			users : array(-4119382350816911954),
		),
	),
	business_intro : $client->businessIntro(
		title : 'XJOPhZkClnp176dt',
		description : '1Z2pDr3xcLHQumjh',
		sticker : $client->documentEmpty(
			id : 3691854628980313811,
		),
	),
	birthday : $client->birthday(
		day : 4,
		month : 25,
		year : 100,
	),
	personal_channel_id : -8783903786418939153,
	personal_channel_message : 60,
	stargifts_count : 27,
	starref_program : $client->starRefProgram(
		bot_id : 5202803403915605553,
		commission_permille : 87,
		duration_months : 32,
		end_date : 75,
		daily_revenue_per_user : $client->starsAmount(
			amount : -2202769079902069034,
			nanos : 51,
		),
	),
	bot_verification : $client->botVerification(
		bot_id : 504296419014288061,
		icon : -2474360916696556636,
		description : '8gSidNqQvtTr5b3M',
	),
	send_paid_messages_stars : 8097255664251159076,
	disallowed_gifts : $client->disallowedGiftsSettings(
		disallow_unlimited_stargifts : true,
		disallow_limited_stargifts : true,
		disallow_unique_stargifts : true,
		disallow_premium_gifts : true,
		disallow_stargifts_from_channels : true,
	),
	stars_rating : $client->starsRating(
		level : 12,
		current_level_stars : 556093556217826917,
		stars : -8846877468519757776,
		next_level_stars : 9003638652613354389,
	),
	stars_my_pending_rating : $client->starsRating(
		level : 81,
		current_level_stars : -5759967560089947476,
		stars : 9157276059008637688,
		next_level_stars : 5166576417927042577,
	),
	stars_my_pending_rating_date : 37,
	main_tab : $client->profileTabPosts(),
	saved_music : $client->documentEmpty(
		id : -8613897842093943920,
	),
	note : $client->textWithEntities(
		text : 'fwWy2UzoPKcmeIq1',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 60,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 50,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 12,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 14,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 0,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 82,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 98,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 5,
				language : '0KpyCefHBQ7Fvmo2',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 89,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 64,
				user_id : 292440926905478885,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 9,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 35,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 22,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 50,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 97,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 32,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 77,
				document_id : 4424101535633059888,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 18,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 52,
				date : 63,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 90,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 59,
				old_text : 'iFVAmxgcj3z6ZvwO',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 55,
			),
		),
	),
	bot_manager_id : -5335215556964956152,
);
```