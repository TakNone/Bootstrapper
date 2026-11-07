# channelFull

**Description** : *Full info about a channel, supergroup or gigagroup*

**Layer** : 233

```tl
channelFull#c4c4dd40 flags:# can_view_participants:flags.3?true can_set_username:flags.6?true can_set_stickers:flags.7?true hidden_prehistory:flags.10?true can_set_location:flags.16?true has_scheduled:flags.19?true can_view_stats:flags.20?true blocked:flags.22?true flags2:# can_delete_channel:flags2.0?true antispam:flags2.1?true participants_hidden:flags2.2?true translations_disabled:flags2.3?true stories_pinned_available:flags2.5?true view_forum_as_messages:flags2.6?true restricted_sponsored:flags2.11?true can_view_revenue:flags2.12?true paid_media_allowed:flags2.14?true can_view_stars_revenue:flags2.15?true paid_reactions_available:flags2.16?true stargifts_available:flags2.19?true paid_messages_available:flags2.20?true has_welcome_messages:flags2.24?true id:long about:string participants_count:flags.0?int admins_count:flags.1?int kicked_count:flags.2?int banned_count:flags.2?int online_count:flags.13?int read_inbox_max_id:int read_outbox_max_id:int unread_count:int chat_photo:Photo notify_settings:PeerNotifySettings exported_invite:flags.23?ExportedChatInvite bot_info:Vector<BotInfo> migrated_from_chat_id:flags.4?long migrated_from_max_id:flags.4?int pinned_msg_id:flags.5?int stickerset:flags.8?StickerSet available_min_id:flags.9?int folder_id:flags.11?int linked_chat_id:flags.14?long location:flags.15?ChannelLocation slowmode_seconds:flags.17?int slowmode_next_send_date:flags.18?int stats_dc:flags.12?int pts:int call:flags.21?InputGroupCall ttl_period:flags.24?int pending_suggestions:flags.25?Vector<string> groupcall_default_join_as:flags.26?Peer theme_emoticon:flags.27?string requests_pending:flags.28?int recent_requesters:flags.28?Vector<long> default_send_as:flags.29?Peer available_reactions:flags.30?ChatReactions reactions_limit:flags2.13?int stories:flags2.4?PeerStories wallpaper:flags2.7?WallPaper boosts_applied:flags2.8?int boosts_unrestrict:flags2.9?int emojiset:flags2.10?StickerSet bot_verification:flags2.17?BotVerification stargifts_count:flags2.18?int send_paid_messages_stars:flags2.21?long main_tab:flags2.22?ProfileTab guard_bot_id:flags2.23?long share_theme:flags2.25?ShareTheme = ChatFull;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_view_participants** | [`flags.3?true`](type/true) | Can we view the participant list? |
| **can_set_username** | [`flags.6?true`](type/true) | Can we set the channel's username? |
| **can_set_stickers** | [`flags.7?true`](type/true) | Can we associate a stickerpack to the supergroup? |
| **hidden_prehistory** | [`flags.10?true`](type/true) | Is the history before we joined hidden to us? |
| **can_set_location** | [`flags.16?true`](type/true) | Can we set the geolocation of this group (for geogroups) |
| **has_scheduled** | [`flags.19?true`](type/true) | Whether scheduled messages are available |
| **can_view_stats** | [`flags.20?true`](type/true) | Can the user view channel/supergroup statistics |
| **blocked** | [`flags.22?true`](type/true) | Whether any anonymous admin of this supergroup was blocked: if set, you won't receive messages from anonymous group admins » in discussion replies via @replies |
| <del style = 'opacity : 0.4'>flags2</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_delete_channel** | [`flags2.0?true`](type/true) | Can we delete this channel? |
| **antispam** | [`flags2.1?true`](type/true) | Whether native antispam functionality is enabled in this supergroup |
| **participants_hidden** | [`flags2.2?true`](type/true) | Whether the participant list is hidden |
| **translations_disabled** | [`flags2.3?true`](type/true) | Whether the real-time chat translation popup should be hidden |
| **stories_pinned_available** | [`flags2.5?true`](type/true) | Whether this user has some pinned stories |
| **view_forum_as_messages** | [`flags2.6?true`](type/true) | Users may also choose to display messages from all topics of a forum as if they were sent to a normal group, using a "View as messages" setting in the local client.  This setting only affects the current account, and is synced to other logged in sessions using the channels.toggleViewForumAsMessages method; invoking this method will update the value of this flag |
| **restricted_sponsored** | [`flags2.11?true`](type/true) | Whether ads on this channel were disabled as specified here » (this flag is only visible to the owner of the channel) |
| **can_view_revenue** | [`flags2.12?true`](type/true) | If set, this user can view ad revenue statistics » for this channel |
| **paid_media_allowed** | [`flags2.14?true`](type/true) | Whether the current user can send or forward paid media » to this channel |
| **can_view_stars_revenue** | [`flags2.15?true`](type/true) | If set, this user can view Telegram Star revenue statistics » for this channel |
| **paid_reactions_available** | [`flags2.16?true`](type/true) | If set, users may send paid Telegram Star reactions » to messages of this channel |
| **stargifts_available** | [`flags2.19?true`](type/true) | If set, users may send Gifts » to this channel |
| **paid_messages_available** | [`flags2.20?true`](type/true) | If set, admins may enable enable paid messages » in this supergroup |
| **has_welcome_messages** | [`flags2.24?true`](type/true) | NOTHING |
| <mark>id</mark> | [`long`](type/long) | ID of the channel |
| <mark>about</mark> | [`string`](type/string) | Info about the channel |
| **participants_count** | [`flags.0?int`](type/int) | Number of participants of the channel |
| **admins_count** | [`flags.1?int`](type/int) | Number of channel admins |
| **kicked_count** | [`flags.2?int`](type/int) | Number of users kicked from the channel |
| **banned_count** | [`flags.2?int`](type/int) | Number of users banned from the channel |
| **online_count** | [`flags.13?int`](type/int) | Number of users currently online |
| <mark>read_inbox_max_id</mark> | [`int`](type/int) | Position up to which all incoming messages are read |
| <mark>read_outbox_max_id</mark> | [`int`](type/int) | Position up to which all outgoing messages are read |
| <mark>unread_count</mark> | [`int`](type/int) | Count of unread messages |
| <mark>chat_photo</mark> | [`Photo`](type/Photo) | Channel picture |
| <mark>notify_settings</mark> | [`PeerNotifySettings`](type/PeerNotifySettings) | Notification settings |
| **exported_invite** | [`flags.23?ExportedChatInvite`](type/ExportedChatInvite) | Invite link |
| <mark>bot_info</mark> | [`Vector<BotInfo>`](type/BotInfo) | Info about bots in the channel/supergroup |
| **migrated_from_chat_id** | [`flags.4?long`](type/long) | The chat ID from which this group was migrated |
| **migrated_from_max_id** | [`flags.4?int`](type/int) | The message ID in the original chat at which this group was migrated |
| **pinned_msg_id** | [`flags.5?int`](type/int) | Message ID of the last pinned message |
| **stickerset** | [`flags.8?StickerSet`](type/StickerSet) | Associated stickerset |
| **available_min_id** | [`flags.9?int`](type/int) | Identifier of a maximum unavailable message in a channel due to hidden history |
| **folder_id** | [`flags.11?int`](type/int) | Peer folder ID, for more info click here |
| **linked_chat_id** | [`flags.14?long`](type/long) | ID of the linked discussion chat for channels (and vice versa, the ID of the linked channel for discussion chats) |
| **location** | [`flags.15?ChannelLocation`](type/ChannelLocation) | Location of the geogroup |
| **slowmode_seconds** | [`flags.17?int`](type/int) | If specified, users in supergroups will only be able to send one message every slowmode_seconds seconds |
| **slowmode_next_send_date** | [`flags.18?int`](type/int) | Indicates when the user will be allowed to send another message in the supergroup (unixtime) |
| **stats_dc** | [`flags.12?int`](type/int) | If set, specifies the DC to use for fetching channel statistics |
| <mark>pts</mark> | [`int`](type/int) | Latest PTS for this channel |
| **call** | [`flags.21?InputGroupCall`](type/InputGroupCall) | Active or scheduled video chat/livestream » associated with this supergroup/channel |
| **ttl_period** | [`flags.24?int`](type/int) | Time-To-Live of messages in this channel or supergroup |
| **pending_suggestions** | [`flags.25?Vector<string>`](type/string) | A list of suggested actions for the supergroup admin, see here for more info » |
| **groupcall_default_join_as** | [`flags.26?Peer`](type/Peer) | Explicitly saved default peer used to join this supergroup/channel's video chat/livestream »; if absent, the current user is used |
| **theme_emoticon** | [`flags.27?string`](type/string) | Emoji representing a specific chat theme |
| **requests_pending** | [`flags.28?int`](type/int) | Pending join requests » |
| **recent_requesters** | [`flags.28?Vector<long>`](type/long) | IDs of users who requested to join recently |
| **default_send_as** | [`flags.29?Peer`](type/Peer) | Default peer used for sending messages to this channel |
| **available_reactions** | [`flags.30?ChatReactions`](type/ChatReactions) | Allowed message reactions » |
| **reactions_limit** | [`flags2.13?int`](type/int) | This flag may be used to impose a custom limit of unique reactions (i.e. a customizable version of appConfig.reactions_uniq_max) |
| **stories** | [`flags2.4?PeerStories`](type/PeerStories) | Channel stories |
| **wallpaper** | [`flags2.7?WallPaper`](type/WallPaper) | Wallpaper |
| **boosts_applied** | [`flags2.8?int`](type/int) | The number of boosts the current user has applied to the current supergroup |
| **boosts_unrestrict** | [`flags2.9?int`](type/int) | The number of boosts this supergroup requires to bypass slowmode and other restrictions, see here » for more info |
| **emojiset** | [`flags2.10?StickerSet`](type/StickerSet) | Custom emoji stickerset associated to the current supergroup, set using channels.setEmojiStickers after reaching the appropriate boost level, see here » for more info |
| **bot_verification** | [`flags2.17?BotVerification`](type/BotVerification) | Bot verification icon |
| **stargifts_count** | [`flags2.18?int`](type/int) | Admins with chatAdminRights.post_messages rights will see the total number of received gifts, everyone else will see the number of gifts added to the channel's profile |
| **send_paid_messages_stars** | [`flags2.21?long`](type/long) | If set and bigger than 0, this supergroup, monoforum or the monoforum associated to this channel has enabled paid messages » and we must pay the specified amount of Stars to send messages to it, see here » for the full flow. This flag will be set both for the monoforum and for channelFull of the associated channel). If set and equal to 0, the monoforum requires payment in general but we were exempted from paying |
| **main_tab** | [`flags2.22?ProfileTab`](type/ProfileTab) | The main tab for the channel's profile, see here » for more info |
| **guard_bot_id** | [`flags2.23?long`](type/long) | NOTHING |
| **share_theme** | [`flags2.25?ShareTheme`](type/ShareTheme) | NOTHING |

---

## Type

[ChatFull](type/ChatFull)

---

## Example

```php
$chatFull = $client->channelFull(
	can_view_participants : true,
	can_set_username : true,
	can_set_stickers : true,
	hidden_prehistory : true,
	can_set_location : true,
	has_scheduled : true,
	can_view_stats : true,
	blocked : true,
	can_delete_channel : true,
	antispam : true,
	participants_hidden : true,
	translations_disabled : true,
	stories_pinned_available : true,
	view_forum_as_messages : true,
	restricted_sponsored : true,
	can_view_revenue : true,
	paid_media_allowed : true,
	can_view_stars_revenue : true,
	paid_reactions_available : true,
	stargifts_available : true,
	paid_messages_available : true,
	has_welcome_messages : true,
	id : 6364270688204873060,
	about : 'C4rNcPGMLK2Aa81t',
	participants_count : 49,
	admins_count : 70,
	kicked_count : 44,
	banned_count : 74,
	online_count : 15,
	read_inbox_max_id : 18,
	read_outbox_max_id : 34,
	unread_count : 67,
	chat_photo : $client->photoEmpty(
		id : -695208344971597422,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : false,
		mute_until : 36,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : true,
		stories_hide_sender : true,
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
	exported_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'sA3Sy0ZDEdP5wmaL',
		admin_id : 7367777230251666257,
		date : 57,
		start_date : 2,
		expire_date : 55,
		usage_limit : 23,
		usage : 29,
		requested : 94,
		subscription_expired : 59,
		title : 'bPsUoqd67RW8uFDc',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 71,
			amount : 5102025214571489978,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 3939188882683226575,
			description : 'l5xeURI2Mv1JuE4r',
			description_photo : $client->photoEmpty(
				id : -1874574138434020633,
			),
			description_document : $client->documentEmpty(
				id : 1376003386459487666,
			),
			commands : array(
				$client->botCommand(
					ephemeral : true,
					command : 'cFa4mlZMXATrCgpv',
					description : 'N5LmSetjFzPOJEMQ',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 58,
				background_dark_color : 39,
				header_color : 51,
				header_dark_color : 40,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -3471859352200136144,
				company : 'bcJaswpoe2KiU3R9',
				custom_description : $client->textWithEntities(
					text : 'ai2yfX7rIMp5Bkdo',
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
	),
	migrated_from_chat_id : 4487423850314546556,
	migrated_from_max_id : 52,
	pinned_msg_id : 1,
	stickerset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 12,
		id : -2130313567666183429,
		access_hash : 5057250943140443111,
		title : 'iI2Atj4fu78cTSlm',
		short_name : 'Vn41CKFjaeq6Wg8H',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'qIsmvMiw2QgpYEVO',
			),
			$client->photoSize(
				type : 'i0BU1zxWrye8t5sA',
				w : 8,
				h : 81,
				size : 16,
			),
			$client->photoCachedSize(
				type : 'iMCymFY10EHgdx46',
				w : 16,
				h : 94,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'KqSok9Qyg1V8Ebs3',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : '9COkDBnRTpsEFM58',
				w : 76,
				h : 70,
				sizes : array(71),
			),
			$client->photoPathSize(
				type : 'QziY2G7LUOnHJWey',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 55,
		thumb_version : 16,
		thumb_document_id : 4591784809144813486,
		count : 59,
		hash : 0,
	),
	available_min_id : 59,
	folder_id : 72,
	linked_chat_id : -4002710735889596940,
	location : $client->channelLocationEmpty(),
	slowmode_seconds : 60,
	slowmode_next_send_date : 77,
	stats_dc : 17,
	pts : 86,
	call : $client->inputGroupCall(
		id : 3446460105102296872,
		access_hash : 3466247040615263368,
	),
	ttl_period : 93,
	pending_suggestions : array('D73GYf6FB2opx4Lg'),
	groupcall_default_join_as : $client->peerUser(
		user_id : 5552954879153195405,
	),
	theme_emoticon : 'j85cSTAOChpdLwM2',
	requests_pending : 59,
	recent_requesters : array(-7488944313675036827),
	default_send_as : $client->peerUser(
		user_id : -292192093645701367,
	),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 24,
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : 823347595226313239,
		),
		max_read_id : 86,
		stories : array(
			$client->storyItemDeleted(
				id : 30,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 32,
				date : 42,
				expire_date : 3,
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
				id : 49,
				date : 5,
				from_id : $client->peerUser(
					user_id : 634135894343737907,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'FvnRxpXCwlLPAYig',
					story_id : 83,
				),
				expire_date : 44,
				caption : 'HP2ubm47vAh8GFVL',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 37,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 98,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 92,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 7,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 56,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 24,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 33,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 91,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 31,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 13,
						language : 'n8rzMJgCDw3kX6hP',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 98,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 83,
						user_id : -7917267630880821759,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 50,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 71,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 31,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 32,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 48,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 52,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 59,
						document_id : 1519025483341336179,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 60,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 86,
						date : 30,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 66,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 10,
						old_text : 'fjXR30K8z9s7OitQ',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 93,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 76,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'i2xLqyfJrCpcuUW4',
						address : 'IfPsUQGvrWMLTEJb',
						provider : 'FUbWDzj0PLt6K8ni',
						venue_id : 'ynIS2YTchvBrg4uH',
						venue_type : 'znTrs2bULAVhikq0',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : -1867147090290102920,
						result_id : 'Mp15UPFH94fjwVOx',
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
						channel_id : -7629702286971977897,
						msg_id : 75,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 18,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'XYlhdVpMoLxkR0qs',
						temperature_c : 1498264.8505859375,
						color : 29,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'ZwbH3x9i7AYnSPTF',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(8864872046421714041),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(-7351354928780687634),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(-821772571691268949),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(6815853688481199209),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 39,
					forwards_count : 8,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 1,
					recent_viewers : array(-9205129111321435608),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(84),
				music : $client->documentEmpty(
					id : -2692029311719767552,
				),
			),
		),
	),
	wallpaper : $client->wallPaper(
		id : 4226270613859156514,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -7251273333096222057,
		slug : 'rpFbPlQ0WqU1nCsB',
		document : $client->documentEmpty(
			id : 2960723749580067047,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 26,
			second_background_color : 41,
			third_background_color : 2,
			fourth_background_color : 38,
			intensity : 71,
			rotation : 39,
			emoticon : 'oV47K8trb3siwALx',
		),
	),
	boosts_applied : 84,
	boosts_unrestrict : 49,
	emojiset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 16,
		id : -4683481357356560433,
		access_hash : 7651231716861956133,
		title : 'quplYOPEaI1ocxbe',
		short_name : 'mDBCvuGyK7cb2elO',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'xypeLGfoA4sviJ5W',
			),
			$client->photoSize(
				type : '2tbVTM4FZSLysoh7',
				w : 88,
				h : 39,
				size : 15,
			),
			$client->photoCachedSize(
				type : 'MmYKrkJyDRQiAzfF',
				w : 71,
				h : 48,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'UXLuleGdV7FjtOfQ',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'AkVNJdzn2fYPOc1r',
				w : 37,
				h : 36,
				sizes : array(54),
			),
			$client->photoPathSize(
				type : 'pa0PVJUThNtHcMIv',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 51,
		thumb_version : 47,
		thumb_document_id : 4157283226408089548,
		count : 94,
		hash : 0,
	),
	bot_verification : $client->botVerification(
		bot_id : -912570950963396485,
		icon : 4622895822431017836,
		description : $client->textWithEntities(
			text : 'tTCIo1fj83sQScab',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 10,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 65,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 54,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 59,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 31,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 94,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 35,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 31,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 58,
					language : 'vIDFhHPeUr0CAnWl',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 73,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 91,
					user_id : 8645343720402699709,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 74,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 28,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 27,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 87,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 97,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 28,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 39,
					document_id : 4433041507367427235,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 34,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 65,
					date : 49,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 17,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 89,
					old_text : 'j2IPbqVKtFXN6Wgn',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 34,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 7,
				),
			),
		),
	),
	stargifts_count : 74,
	send_paid_messages_stars : 1664950404778763086,
	main_tab : $client->profileTabPosts(),
	guard_bot_id : 1469576913976153267,
	share_theme : $client->shareThemeDefault(),
);
```