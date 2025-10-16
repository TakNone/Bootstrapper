# userFull

**Description** : *Extended user info*

**Layer** : 216

```tl
userFull#a02bc13e flags:# blocked:flags.0?true phone_calls_available:flags.4?true phone_calls_private:flags.5?true can_pin_message:flags.7?true has_scheduled:flags.12?true video_calls_available:flags.13?true voice_messages_forbidden:flags.20?true translations_disabled:flags.23?true stories_pinned_available:flags.26?true blocked_my_stories_from:flags.27?true wallpaper_overridden:flags.28?true contact_require_premium:flags.29?true read_dates_private:flags.30?true flags2:# sponsored_enabled:flags2.7?true can_view_revenue:flags2.9?true bot_can_manage_emoji_status:flags2.10?true display_gifts_button:flags2.16?true id:long about:flags.1?string settings:PeerSettings personal_photo:flags.21?Photo profile_photo:flags.2?Photo fallback_photo:flags.22?Photo notify_settings:PeerNotifySettings bot_info:flags.3?BotInfo pinned_msg_id:flags.6?int common_chats_count:int folder_id:flags.11?int ttl_period:flags.14?int theme:flags.15?ChatTheme private_forward_name:flags.16?string bot_group_admin_rights:flags.17?ChatAdminRights bot_broadcast_admin_rights:flags.18?ChatAdminRights wallpaper:flags.24?WallPaper stories:flags.25?PeerStories business_work_hours:flags2.0?BusinessWorkHours business_location:flags2.1?BusinessLocation business_greeting_message:flags2.2?BusinessGreetingMessage business_away_message:flags2.3?BusinessAwayMessage business_intro:flags2.4?BusinessIntro birthday:flags2.5?Birthday personal_channel_id:flags2.6?long personal_channel_message:flags2.6?int stargifts_count:flags2.8?int starref_program:flags2.11?StarRefProgram bot_verification:flags2.12?BotVerification send_paid_messages_stars:flags2.14?long disallowed_stargifts:flags2.15?DisallowedGiftsSettings stars_rating:flags2.17?StarsRating stars_my_pending_rating:flags2.18?StarsRating stars_my_pending_rating_date:flags2.18?int main_tab:flags2.20?ProfileTab saved_music:flags2.21?Document note:flags2.22?TextWithEntities = UserFull;
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
| **disallowed_stargifts** | [`flags2.15?DisallowedGiftsSettings`](type/DisallowedGiftsSettings) | NOTHING |
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
	id : -2284531420198252096,
	about : 'HlpV8F2ED3WCan9L',
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
		geo_distance : 89,
		request_chat_title : 'TovxBJwIjLmGH4z7',
		request_chat_date : 82,
		business_bot_id : -4489150440707225682,
		business_bot_manage_url : 'https://docs.liveproto.dev',
		charge_paid_message_stars : 1644401197565817175,
		registration_month : 'wxYTsuRABMiv7Oze',
		phone_country : '+1234567890',
		name_change_date : 29,
		photo_change_date : 53,
	),
	personal_photo : $client->photoEmpty(
		id : -5902660209442000563,
	),
	profile_photo : $client->photoEmpty(
		id : -1128816139102164991,
	),
	fallback_photo : $client->photoEmpty(
		id : -1389675087008691832,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : false,
		mute_until : 64,
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
		user_id : -6019213600139584784,
		description : 'rCkIdKabfBUYDjWZ',
		description_photo : $client->photoEmpty(
			id : 2816498649780362699,
		),
		description_document : $client->documentEmpty(
			id : -2218037991305356281,
		),
		commands : array(
			$client->botCommand(
				command : 'kjaVvWTmyzDSP20h',
				description : 'CNQSIb5VZ97reEnK',
			),
		),
		menu_button : $client->botMenuButtonDefault(),
		privacy_policy_url : 'https://docs.liveproto.dev',
		app_settings : $client->botAppSettings(
			placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			background_color : 58,
			background_dark_color : 75,
			header_color : 20,
			header_dark_color : 79,
		),
		verifier_settings : $client->botVerifierSettings(
			can_modify_custom_description : true,
			icon : -6583453773654727095,
			company : 'mIT27HU0fej1DYE8',
			custom_description : 'iYRzA3xwag5W8GPL',
		),
	),
	pinned_msg_id : 72,
	common_chats_count : 87,
	folder_id : 50,
	ttl_period : 29,
	theme : $client->chatTheme(
		emoticon : 'oD9B4lTciuWNvZyq',
	),
	private_forward_name : 'eaOxIbTMH8to1hml',
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
		id : 6631676102550073205,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 5327044294520257157,
		slug : '2u9j4oahQiSLfg1y',
		document : $client->documentEmpty(
			id : 5179284253130067920,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 58,
			second_background_color : 27,
			third_background_color : 85,
			fourth_background_color : 51,
			intensity : 0,
			rotation : 46,
			emoticon : 'HONYM9KQ2AtjfinT',
		),
	),
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : 4698190743592107866,
		),
		max_read_id : 7,
		stories : array(
			$client->storyItemDeleted(
				id : 66,
			),
			$client->storyItemSkipped(
				close_friends : true,
				id : 4,
				date : 68,
				expire_date : 56,
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
				id : 34,
				date : 1,
				from_id : $client->peerUser(...),
				fwd_from : $client->storyFwdHeader(...),
				expire_date : 84,
				caption : 'bw7RygSH5ZaO0UpP',
				entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				media : $client->messageMediaEmpty(...),
				media_areas : array(
					$client->mediaAreaVenue(...),
					$client->inputMediaAreaVenue(...),
					$client->mediaAreaGeoPoint(...),
					$client->mediaAreaSuggestedReaction(...),
					$client->mediaAreaChannelPost(...),
					$client->inputMediaAreaChannelPost(...),
					$client->mediaAreaUrl(...),
					$client->mediaAreaWeather(...),
					$client->mediaAreaStarGift(...),
				),
				privacy : array(
					$client->privacyValueAllowContacts(...),
					$client->privacyValueAllowAll(...),
					$client->privacyValueAllowUsers(...),
					$client->privacyValueDisallowContacts(...),
					$client->privacyValueDisallowAll(...),
					$client->privacyValueDisallowUsers(...),
					$client->privacyValueAllowChatParticipants(...),
					$client->privacyValueDisallowChatParticipants(...),
					$client->privacyValueAllowCloseFriends(...),
					$client->privacyValueAllowPremium(...),
					$client->privacyValueAllowBots(...),
					$client->privacyValueDisallowBots(...),
				),
				views : $client->storyViews(...),
				sent_reaction : $client->reactionEmpty(...),
				albums : array(22),
			),
		),
	),
	business_work_hours : $client->businessWorkHours(
		open_now : true,
		timezone_id : 'NQt6Hj8GceUaC1Dq',
		weekly_open : array(
			$client->businessWeeklyOpen(
				start_minute : 47,
				end_minute : 51,
			),
		),
	),
	business_location : $client->businessLocation(
		geo_point : $client->geoPointEmpty(),
		address : 'O63m4X25wVDiMHJQ',
	),
	business_greeting_message : $client->businessGreetingMessage(
		shortcut_id : 22,
		recipients : $client->businessRecipients(
			existing_chats : true,
			new_chats : true,
			contacts : true,
			non_contacts : true,
			exclude_selected : true,
			users : array(7229590855248046709),
		),
		no_activity_days : 27,
	),
	business_away_message : $client->businessAwayMessage(
		offline_only : true,
		shortcut_id : 28,
		schedule : $client->businessAwayMessageScheduleAlways(),
		recipients : $client->businessRecipients(
			existing_chats : true,
			new_chats : true,
			contacts : true,
			non_contacts : true,
			exclude_selected : true,
			users : array(-2558109545651404298),
		),
	),
	business_intro : $client->businessIntro(
		title : 'SgxGkYmtWFdpfTDU',
		description : 's8glPaAJ0YTxHSVb',
		sticker : $client->documentEmpty(
			id : -8142064036217738574,
		),
	),
	birthday : $client->birthday(
		day : 63,
		month : 71,
		year : 67,
	),
	personal_channel_id : 4902585237385465232,
	personal_channel_message : 79,
	stargifts_count : 5,
	starref_program : $client->starRefProgram(
		bot_id : 6562555385558198516,
		commission_permille : 74,
		duration_months : 44,
		end_date : 55,
		daily_revenue_per_user : $client->starsAmount(
			amount : -1149206307127974831,
			nanos : 53,
		),
	),
	bot_verification : $client->botVerification(
		bot_id : -4319184608483109790,
		icon : 4998843427510641051,
		description : 'ybDMnZgr6zAQljGI',
	),
	send_paid_messages_stars : -2534559054569449423,
	disallowed_stargifts : $client->disallowedGiftsSettings(
		disallow_unlimited_stargifts : true,
		disallow_limited_stargifts : true,
		disallow_unique_stargifts : true,
		disallow_premium_gifts : true,
	),
	stars_rating : $client->starsRating(
		level : 30,
		current_level_stars : 2727359783469763180,
		stars : 8514462292921223178,
		next_level_stars : -7201727694651571780,
	),
	stars_my_pending_rating : $client->starsRating(
		level : 9,
		current_level_stars : 1189253787273036293,
		stars : -2991629730965671227,
		next_level_stars : -56192662131974309,
	),
	stars_my_pending_rating_date : 19,
	main_tab : $client->profileTabPosts(),
	saved_music : $client->documentEmpty(
		id : -9176265933231894236,
	),
	note : $client->textWithEntities(
		text : 'FTnIaOtWixhM84Cq',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 52,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 10,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 64,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 72,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 86,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 21,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 48,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 5,
				language : 'f9SRNF0q5gtow7De',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 11,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 79,
				user_id : -3106900010677080798,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 37,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 7,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 10,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 20,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 30,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 48,
				document_id : 1684586043797197632,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 20,
			),
		),
	),
);
```