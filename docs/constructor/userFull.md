# userFull

**Description** : *Extended user info*

**Layer** : 233

```tl
userFull#b90c2afd flags:# blocked:flags.0?true phone_calls_available:flags.4?true phone_calls_private:flags.5?true can_pin_message:flags.7?true has_scheduled:flags.12?true video_calls_available:flags.13?true voice_messages_forbidden:flags.20?true translations_disabled:flags.23?true stories_pinned_available:flags.26?true blocked_my_stories_from:flags.27?true wallpaper_overridden:flags.28?true contact_require_premium:flags.29?true read_dates_private:flags.30?true flags2:# sponsored_enabled:flags2.7?true can_view_revenue:flags2.9?true bot_can_manage_emoji_status:flags2.10?true display_gifts_button:flags2.16?true noforwards_my_enabled:flags2.23?true noforwards_peer_enabled:flags2.24?true unofficial_security_risk:flags2.26?true id:long about:flags.1?string settings:PeerSettings personal_photo:flags.21?Photo profile_photo:flags.2?Photo fallback_photo:flags.22?Photo notify_settings:PeerNotifySettings bot_info:flags.3?BotInfo pinned_msg_id:flags.6?int common_chats_count:int folder_id:flags.11?int ttl_period:flags.14?int theme:flags.15?ChatTheme private_forward_name:flags.16?string bot_group_admin_rights:flags.17?ChatAdminRights bot_broadcast_admin_rights:flags.18?ChatAdminRights wallpaper:flags.24?WallPaper stories:flags.25?PeerStories business_work_hours:flags2.0?BusinessWorkHours business_location:flags2.1?BusinessLocation business_greeting_message:flags2.2?BusinessGreetingMessage business_away_message:flags2.3?BusinessAwayMessage business_intro:flags2.4?BusinessIntro birthday:flags2.5?Birthday personal_channel_id:flags2.6?long personal_channel_message:flags2.6?int stargifts_count:flags2.8?int starref_program:flags2.11?StarRefProgram bot_verification:flags2.12?BotVerification send_paid_messages_stars:flags2.14?long disallowed_gifts:flags2.15?DisallowedGiftsSettings stars_rating:flags2.17?StarsRating stars_my_pending_rating:flags2.18?StarsRating stars_my_pending_rating_date:flags2.18?int main_tab:flags2.20?ProfileTab saved_music:flags2.21?Document note:flags2.22?TextWithEntities bot_manager_id:flags2.25?long wallet_card:flags2.19?wallet.Card share_theme:flags2.27?ShareTheme = UserFull;
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
| **wallet_card** | [`flags2.19?wallet.Card`](type/wallet.Card) | NOTHING |
| **share_theme** | [`flags2.27?ShareTheme`](type/ShareTheme) | NOTHING |

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
	id : 7499802082754804485,
	about : 'kXQZTMorFefYzhdE',
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
		geo_distance : 17,
		request_chat_title : 'wrXj0854NYIZkv1x',
		request_chat_date : 16,
		business_bot_id : 5094657203351539899,
		business_bot_manage_url : 'https://docs.liveproto.dev',
		charge_paid_message_stars : -5621504211956655745,
		registration_month : 'lYCxGZPAwuvV6b1T',
		phone_country : '+1234567890',
		name_change_date : 48,
		photo_change_date : 3,
	),
	personal_photo : $client->photoEmpty(
		id : -5593427973598960869,
	),
	profile_photo : $client->photoEmpty(
		id : -1299312909667139255,
	),
	fallback_photo : $client->photoEmpty(
		id : -6666130760512398434,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : false,
		mute_until : 53,
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
		user_id : 157674971669044229,
		description : 'Ovj8AU1G0CZRlQqJ',
		description_photo : $client->photoEmpty(
			id : -7322702965306494790,
		),
		description_document : $client->documentEmpty(
			id : -2730662885971033648,
		),
		commands : array(
			$client->botCommand(
				ephemeral : true,
				command : 'vjSwaVT2tZpH8OJU',
				description : 'q9o0DKRSbBEHYP26',
			),
		),
		menu_button : $client->botMenuButtonDefault(),
		privacy_policy_url : 'https://docs.liveproto.dev',
		app_settings : $client->botAppSettings(
			placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			background_color : 89,
			background_dark_color : 2,
			header_color : 56,
			header_dark_color : 100,
		),
		verifier_settings : $client->botVerifierSettings(
			can_modify_custom_description : true,
			icon : -2794178900341937703,
			company : 'oy6rRQ3HNhaZ7ift',
			custom_description : $client->textWithEntities(
				text : 'cUSgWQPJDAlosBfX',
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
					$client->messageEntityFormattedDate(...),
					$client->messageEntityDiffInsert(...),
					$client->messageEntityDiffReplace(...),
					$client->messageEntityDiffDelete(...),
					$client->messageEntityTonAddress(...),
				),
			),
		),
	),
	pinned_msg_id : 15,
	common_chats_count : 16,
	folder_id : 70,
	ttl_period : 27,
	theme : $client->chatTheme(
		emoticon : 'sFM8Zn0z2HVkEWBu',
	),
	private_forward_name : 'aRJMDVIF4wkNGUhe',
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
		id : 1251236835870226818,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -3481315617531228740,
		slug : 'mFPi2jnwWUtILZHA',
		document : $client->documentEmpty(
			id : -173488978932701452,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 83,
			second_background_color : 55,
			third_background_color : 42,
			fourth_background_color : 0,
			intensity : 58,
			rotation : 90,
			emoticon : '3hS6FxpdCfGLQD1W',
		),
	),
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : -7175284180322439257,
		),
		max_read_id : 21,
		stories : array(
			$client->storyItemDeleted(
				id : 75,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 84,
				date : 14,
				expire_date : 63,
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
				id : 30,
				date : 70,
				from_id : $client->peerUser(
					user_id : -4243239793744720318,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'MTIiKbU8hYWDk7t9',
					story_id : 97,
				),
				expire_date : 13,
				caption : '8A0qgSymrIteBDU7',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 88,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 85,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 100,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 9,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 85,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 70,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 97,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 81,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 69,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 78,
						language : 'mNcLfO1eHTSGr4wo',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 18,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 47,
						user_id : 1579554352409043555,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 34,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 22,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 74,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 34,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 35,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 26,
						document_id : -6059982262828325364,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 76,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 42,
						date : 7,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 80,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 22,
						old_text : 'kxoPqKH2pi4OIRas',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 86,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 4,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'ATd19JP2xXSw5VKk',
						address : 'IjGzcdxynb8SmvO9',
						provider : 'GqSjMUEQwt9NufLb',
						venue_id : 'BFl7znWEUg8hSORM',
						venue_type : 'LiYZ1hAUfOaG6XVC',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : 7196520888326989038,
						result_id : 'IJXKu0HaBLgANbqy',
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
						channel_id : 6556028544956983971,
						msg_id : 38,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 7,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'UlVTw8RK4LkO2QbJ',
						temperature_c : -1384596.345703125,
						color : 24,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'pdsBA7fLa1bgtVF3',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(3753785594936600615),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(2762167403113922680),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(4829038337179472252),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(-4509219133915229946),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 20,
					forwards_count : 99,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 94,
					recent_viewers : array(-8728931941149220611),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(14),
				music : $client->documentEmpty(
					id : -8573966201542497331,
				),
			),
		),
	),
	business_work_hours : $client->businessWorkHours(
		open_now : true,
		timezone_id : 'ktGgcNFVMSf5h1AB',
		weekly_open : array(
			$client->businessWeeklyOpen(
				start_minute : 64,
				end_minute : 47,
			),
		),
	),
	business_location : $client->businessLocation(
		geo_point : $client->geoPointEmpty(),
		address : 'GHu5jfSXyIo6ts3D',
	),
	business_greeting_message : $client->businessGreetingMessage(
		shortcut_id : 89,
		recipients : $client->businessRecipients(
			existing_chats : true,
			new_chats : true,
			contacts : true,
			non_contacts : true,
			exclude_selected : true,
			users : array(7643733605152339838),
		),
		no_activity_days : 24,
	),
	business_away_message : $client->businessAwayMessage(
		offline_only : true,
		shortcut_id : 46,
		schedule : $client->businessAwayMessageScheduleAlways(),
		recipients : $client->businessRecipients(
			existing_chats : true,
			new_chats : true,
			contacts : true,
			non_contacts : true,
			exclude_selected : true,
			users : array(-4618690670053474766),
		),
	),
	business_intro : $client->businessIntro(
		title : '1UTgsCGeKMJSLBkD',
		description : 'DE9cnN0Hhxzgl6SW',
		sticker : $client->documentEmpty(
			id : -7816101800850200792,
		),
	),
	birthday : $client->birthday(
		day : 36,
		month : 73,
		year : 34,
	),
	personal_channel_id : -8028449235048544794,
	personal_channel_message : 45,
	stargifts_count : 88,
	starref_program : $client->starRefProgram(
		bot_id : 3450911411736770597,
		commission_permille : 76,
		duration_months : 50,
		end_date : 87,
		daily_revenue_per_user : $client->starsAmount(
			amount : -6082865448246270549,
			nanos : 15,
		),
	),
	bot_verification : $client->botVerification(
		bot_id : 6240410061041451237,
		icon : 3717701693431031653,
		description : $client->textWithEntities(
			text : '7KjkREWLbQNAs2DZ',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 32,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 23,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 27,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 33,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 75,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 79,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 52,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 3,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 80,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 87,
					language : 'NFulGJeL8OvVkbrM',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 46,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 26,
					user_id : -2710898947596168156,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 74,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 81,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 80,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 57,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 49,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 84,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 23,
					document_id : 2136234915987222658,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 42,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 92,
					date : 22,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 39,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 13,
					old_text : 'GPQRqoV6XTL4CK1u',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 93,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 59,
				),
			),
		),
	),
	send_paid_messages_stars : 718207339909427909,
	disallowed_gifts : $client->disallowedGiftsSettings(
		disallow_unlimited_stargifts : true,
		disallow_limited_stargifts : true,
		disallow_unique_stargifts : true,
		disallow_premium_gifts : true,
		disallow_stargifts_from_channels : true,
	),
	stars_rating : $client->starsRating(
		level : 33,
		current_level_stars : -8204997559964471067,
		stars : 2864172423670517714,
		next_level_stars : -2057009274586744761,
	),
	stars_my_pending_rating : $client->starsRating(
		level : 61,
		current_level_stars : 3539678299584558127,
		stars : 2912486969617708577,
		next_level_stars : 8385516979476258601,
	),
	stars_my_pending_rating_date : 100,
	main_tab : $client->profileTabPosts(),
	saved_music : $client->documentEmpty(
		id : -1579483639067441970,
	),
	note : $client->textWithEntities(
		text : 'HqtPOrc5WUxzSVk8',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 7,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 63,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 85,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 9,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 85,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 42,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 17,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 46,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 1,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 51,
				language : 'Z4Gsgu9TODeUR7hB',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 68,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 95,
				user_id : 407142717888640825,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 90,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 30,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 3,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 34,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 23,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 84,
				document_id : 7987528644432515899,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 5,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 92,
				date : 25,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 64,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 17,
				old_text : 'J5mThlZxeWLjvCfF',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 90,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 34,
			),
		),
	),
	bot_manager_id : 3196343640433958860,
	wallet_card : $client->wallet->card(
		stickers : array(
			$client->wallet->cardSticker(
				coordinates : $client->mediaAreaCoordinates(
					x : 578454.78125,
					y : -1536571.1962890625,
					w : -633468.7861328125,
					h : 440697.1787109375,
					rotation : -1753427.904296875,
					radius : -1149725.5205078125,
				),
				nft : $client->wallet->nftItem(
					collection_address : 'KAXaZED2k4gvFLjU',
					address : '5RA3jCOgMq6ZvDy2',
					owner_address : 'db4Q2nhk1CUg3NOi',
					index : 'xJoGjli32qefuP9N',
					name : '8MoV0agXQ4lvdGFK',
					description : 'n80lz7NJHfiEUx5b',
					image : $client->webDocument(...),
					image_small : $client->webDocument(...),
					content_url : $client->webDocument(...),
					lottie : $client->webDocument(...),
					attributes : array(
						$client->wallet->nftAttribute(...),
					),
					extra : $client->dataJSON(...),
					gift : $client->starGift(...),
				),
			),
		),
		bg_nft_item : $client->wallet->nftItem(
			collection_address : 's9a28fciVJ3OqPLT',
			address : 'NCgBdyT2KavZJUIc',
			owner_address : 'Fx3orcjVdTnl4hIH',
			index : 'tq8XwznjWsPYTLD1',
			name : 'nV16BWszpHbQS73e',
			description : 'wPTglEAbvcOYhaut',
			image : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 8112423332897766141,
				size : 11,
				mime_type : 'zearMQcSHt9XdbgP',
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
			image_small : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -8375934134559779095,
				size : 68,
				mime_type : 'aI0e8zFflOiZvE5r',
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
			content_url : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 3656427802743718264,
				size : 70,
				mime_type : 'DvhKlSC3Q2y5uWps',
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
			lottie : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -4734790186254573674,
				size : 19,
				mime_type : '7TVZqUWMNJRc4jgI',
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
			attributes : array(
				$client->wallet->nftAttribute(
					trait_type : '7L0WUwRbpDl9fodt',
					value : 'QB41vS9fTJl7kHKi',
				),
			),
			extra : $client->dataJSON(
				data : '4U6EV9sLeQbJSnRy',
			),
			gift : $client->starGift(
				limited : true,
				sold_out : true,
				birthday : true,
				require_premium : true,
				limited_per_user : true,
				peer_color_available : true,
				auction : true,
				id : -7233242768394479555,
				sticker : $client->documentEmpty(...),
				stars : 241468328526545078,
				availability_remains : 58,
				availability_total : 34,
				availability_resale : 4012074071994443292,
				convert_stars : -3351187706438169142,
				first_sale_date : 93,
				last_sale_date : 19,
				upgrade_stars : 4146440595356364099,
				resell_min_stars : -8043969688967615889,
				title : 'NOijaqbQzweA0VFx',
				released_by : $client->peerUser(...),
				per_user_total : 73,
				per_user_remains : 56,
				locked_until_date : 47,
				auction_slug : 'sriGNC3HLcydlRbq',
				gifts_per_round : 40,
				auction_start_date : 46,
				upgrade_variants : 55,
				background : $client->starGiftBackground(...),
			),
		),
		address : 'vh7aLBNRCSU46wJq',
		balance : -6680559286756617892,
	),
	share_theme : $client->shareThemeDefault(),
);
```