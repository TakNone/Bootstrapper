# channelFull

**Description** : *Full info about a channel, supergroup or gigagroup*

**Layer** : 216

```tl
channelFull#e4e0b29d flags:# can_view_participants:flags.3?true can_set_username:flags.6?true can_set_stickers:flags.7?true hidden_prehistory:flags.10?true can_set_location:flags.16?true has_scheduled:flags.19?true can_view_stats:flags.20?true blocked:flags.22?true flags2:# can_delete_channel:flags2.0?true antispam:flags2.1?true participants_hidden:flags2.2?true translations_disabled:flags2.3?true stories_pinned_available:flags2.5?true view_forum_as_messages:flags2.6?true restricted_sponsored:flags2.11?true can_view_revenue:flags2.12?true paid_media_allowed:flags2.14?true can_view_stars_revenue:flags2.15?true paid_reactions_available:flags2.16?true stargifts_available:flags2.19?true paid_messages_available:flags2.20?true id:long about:string participants_count:flags.0?int admins_count:flags.1?int kicked_count:flags.2?int banned_count:flags.2?int online_count:flags.13?int read_inbox_max_id:int read_outbox_max_id:int unread_count:int chat_photo:Photo notify_settings:PeerNotifySettings exported_invite:flags.23?ExportedChatInvite bot_info:Vector<BotInfo> migrated_from_chat_id:flags.4?long migrated_from_max_id:flags.4?int pinned_msg_id:flags.5?int stickerset:flags.8?StickerSet available_min_id:flags.9?int folder_id:flags.11?int linked_chat_id:flags.14?long location:flags.15?ChannelLocation slowmode_seconds:flags.17?int slowmode_next_send_date:flags.18?int stats_dc:flags.12?int pts:int call:flags.21?InputGroupCall ttl_period:flags.24?int pending_suggestions:flags.25?Vector<string> groupcall_default_join_as:flags.26?Peer theme_emoticon:flags.27?string requests_pending:flags.28?int recent_requesters:flags.28?Vector<long> default_send_as:flags.29?Peer available_reactions:flags.30?ChatReactions reactions_limit:flags2.13?int stories:flags2.4?PeerStories wallpaper:flags2.7?WallPaper boosts_applied:flags2.8?int boosts_unrestrict:flags2.9?int emojiset:flags2.10?StickerSet bot_verification:flags2.17?BotVerification stargifts_count:flags2.18?int send_paid_messages_stars:flags2.21?long main_tab:flags2.22?ProfileTab = ChatFull;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_view_participants** | [`flags.3?true`](type/true) | Can we view the participant list? |
| **can_set_username** | [`flags.6?true`](type/true) | Can we set the channel's username? |
| **can_set_stickers** | [`flags.7?true`](type/true) | Can we associate a stickerpack to the supergroup? |
| **hidden_prehistory** | [`flags.10?true`](type/true) | Is the history before we joined hidden to us? |
| **can_set_location** | [`flags.16?true`](type/true) | Can we set the geolocation of this group (for geogroups) |
| **has_scheduled** | [`flags.19?true`](type/true) | Whether scheduled messages are available |
| **can_view_stats** | [`flags.20?true`](type/true) | Can the user view channel/supergroup statistics |
| **blocked** | [`flags.22?true`](type/true) | Whether any anonymous admin of this supergroup was blocked: if set, you won't receive messages from anonymous group admins in discussion replies via @replies |
| <mark>flags2</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
| **call** | [`flags.21?InputGroupCall`](type/InputGroupCall) | Livestream or group call information |
| **ttl_period** | [`flags.24?int`](type/int) | Time-To-Live of messages in this channel or supergroup |
| **pending_suggestions** | [`flags.25?Vector<string>`](type/string) | A list of suggested actions for the supergroup admin, see here for more info » |
| **groupcall_default_join_as** | [`flags.26?Peer`](type/Peer) | When using phone.getGroupCallJoinAs to get a list of peers that can be used to join a group call, this field indicates the peer that should be selected by default |
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
	id : 2744942567543732359,
	about : 'PSJG4BnaR3Z9tevo',
	participants_count : 52,
	admins_count : 43,
	kicked_count : 98,
	banned_count : 23,
	online_count : 97,
	read_inbox_max_id : 74,
	read_outbox_max_id : 53,
	unread_count : 94,
	chat_photo : $client->photoEmpty(
		id : -3843947609146051800,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : false,
		mute_until : 88,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : false,
		stories_hide_sender : false,
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
	exported_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'v93KxcmLJQoGOkXZ',
		admin_id : 2546775700100770655,
		date : 0,
		start_date : 86,
		expire_date : 74,
		usage_limit : 26,
		usage : 80,
		requested : 43,
		subscription_expired : 24,
		title : 'fo5BtMmlEc6aARzX',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 76,
			amount : 1795513553710143306,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 422149284767921435,
			description : 'paw7KqJG5LAF0hWI',
			description_photo : $client->photoEmpty(
				id : -3525878125231940655,
			),
			description_document : $client->documentEmpty(
				id : -4905529286094028223,
			),
			commands : array(
				$client->botCommand(
					command : 'GM2jfPxXr7qRJsTN',
					description : 'nFAtZixa84CP50cY',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 75,
				background_dark_color : 3,
				header_color : 63,
				header_dark_color : 81,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -6853401266593825858,
				company : 'J4W65xgOfDHTneRE',
				custom_description : 'JuscIpt6bBzmnOR5',
			),
		),
	),
	migrated_from_chat_id : 8544432701442692265,
	migrated_from_max_id : 27,
	pinned_msg_id : 43,
	stickerset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 59,
		id : -7700070530829105512,
		access_hash : 2226073531442944785,
		title : 'eX6uNnQjipzMgdYD',
		short_name : 'S6qPTMviUdsEcoZ1',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'rm3U9j2ENoSOcBQp',
			),
			$client->photoSize(
				type : 'zgrkfpoIDECOhWRA',
				w : 12,
				h : 29,
				size : 37,
			),
			$client->photoCachedSize(
				type : 'c2ZUCrhQ0zg71LVy',
				w : 15,
				h : 93,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'FNn2EvCJ3MzGZKXQ',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'hFCmWV1EZn6wz5dp',
				w : 82,
				h : 82,
				sizes : array(98),
			),
			$client->photoPathSize(
				type : 'bNFZlQdvtnqmOS3k',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 61,
		thumb_version : 60,
		thumb_document_id : 7867496952205438961,
		count : 53,
		hash : 0,
	),
	available_min_id : 45,
	folder_id : 12,
	linked_chat_id : -6088945529008938444,
	location : $client->channelLocationEmpty(),
	slowmode_seconds : 17,
	slowmode_next_send_date : 94,
	stats_dc : 87,
	pts : 97,
	call : $client->inputGroupCall(
		id : -4461821373589892007,
		access_hash : -2819102098775039479,
	),
	ttl_period : 17,
	pending_suggestions : array('pEaeWolHwDuXr3QV'),
	groupcall_default_join_as : $client->peerUser(
		user_id : 6651003688105403950,
	),
	theme_emoticon : 'QFfrekhb8KDHgRxw',
	requests_pending : 10,
	recent_requesters : array(-4356355015829863708),
	default_send_as : $client->peerUser(
		user_id : 7219380243980077414,
	),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 45,
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : -2464332925428165940,
		),
		max_read_id : 10,
		stories : array(
			$client->storyItemDeleted(
				id : 53,
			),
			$client->storyItemSkipped(
				close_friends : true,
				id : 18,
				date : 48,
				expire_date : 60,
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
				id : 48,
				date : 63,
				from_id : $client->peerUser(...),
				fwd_from : $client->storyFwdHeader(...),
				expire_date : 69,
				caption : 'aVX6PyUfiM2KDHJx',
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
				albums : array(13),
			),
		),
	),
	wallpaper : $client->wallPaper(
		id : 7605100366669820540,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 2946538123135048745,
		slug : 'NhqbwLvP6t1oVK8H',
		document : $client->documentEmpty(
			id : 8905140638083892011,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 39,
			second_background_color : 75,
			third_background_color : 59,
			fourth_background_color : 51,
			intensity : 91,
			rotation : 12,
			emoticon : 'cIr1Oa8ZT74UY0Xq',
		),
	),
	boosts_applied : 75,
	boosts_unrestrict : 96,
	emojiset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 45,
		id : -7764785473016459544,
		access_hash : -1387527487731335146,
		title : '3uayfCMYXlnUKSg0',
		short_name : '7g0saw6iZn3EbC8U',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'YtGXSNoCIkyH4MWi',
			),
			$client->photoSize(
				type : 'dHaR9O6tySYPZDqw',
				w : 37,
				h : 95,
				size : 23,
			),
			$client->photoCachedSize(
				type : '9IwbHsRYOyp2xXCn',
				w : 12,
				h : 26,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'IKZafE5yT2qt61ib',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'Qd8k5q69uS1BvpIh',
				w : 5,
				h : 65,
				sizes : array(67),
			),
			$client->photoPathSize(
				type : 'om7OQjclwVXi8UbK',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 80,
		thumb_version : 13,
		thumb_document_id : 2310090219510515008,
		count : 38,
		hash : 0,
	),
	bot_verification : $client->botVerification(
		bot_id : 3066300726739163005,
		icon : 681599104010759536,
		description : 'xJtQLT90ChMpmIvD',
	),
	stargifts_count : 51,
	send_paid_messages_stars : 1156183988530737482,
	main_tab : $client->profileTabPosts(),
);
```