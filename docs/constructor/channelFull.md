# channelFull

**Description** : *Full info about a channel, supergroup or gigagroup*

**Layer** : 211

```tl
channelFull#e07429de flags:# can_view_participants:flags.3?true can_set_username:flags.6?true can_set_stickers:flags.7?true hidden_prehistory:flags.10?true can_set_location:flags.16?true has_scheduled:flags.19?true can_view_stats:flags.20?true blocked:flags.22?true flags2:# can_delete_channel:flags2.0?true antispam:flags2.1?true participants_hidden:flags2.2?true translations_disabled:flags2.3?true stories_pinned_available:flags2.5?true view_forum_as_messages:flags2.6?true restricted_sponsored:flags2.11?true can_view_revenue:flags2.12?true paid_media_allowed:flags2.14?true can_view_stars_revenue:flags2.15?true paid_reactions_available:flags2.16?true stargifts_available:flags2.19?true paid_messages_available:flags2.20?true id:long about:string participants_count:flags.0?int admins_count:flags.1?int kicked_count:flags.2?int banned_count:flags.2?int online_count:flags.13?int read_inbox_max_id:int read_outbox_max_id:int unread_count:int chat_photo:Photo notify_settings:PeerNotifySettings exported_invite:flags.23?ExportedChatInvite bot_info:Vector<BotInfo> migrated_from_chat_id:flags.4?long migrated_from_max_id:flags.4?int pinned_msg_id:flags.5?int stickerset:flags.8?StickerSet available_min_id:flags.9?int folder_id:flags.11?int linked_chat_id:flags.14?long location:flags.15?ChannelLocation slowmode_seconds:flags.17?int slowmode_next_send_date:flags.18?int stats_dc:flags.12?int pts:int call:flags.21?InputGroupCall ttl_period:flags.24?int pending_suggestions:flags.25?Vector<string> groupcall_default_join_as:flags.26?Peer theme_emoticon:flags.27?string requests_pending:flags.28?int recent_requesters:flags.28?Vector<long> default_send_as:flags.29?Peer available_reactions:flags.30?ChatReactions reactions_limit:flags2.13?int stories:flags2.4?PeerStories wallpaper:flags2.7?WallPaper boosts_applied:flags2.8?int boosts_unrestrict:flags2.9?int emojiset:flags2.10?StickerSet bot_verification:flags2.17?BotVerification stargifts_count:flags2.18?int send_paid_messages_stars:flags2.21?long = ChatFull;
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
| **stargifts_available** | [`flags2.19?true`](type/true) | NOTHING |
| **paid_messages_available** | [`flags2.20?true`](type/true) | NOTHING |
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
| **bot_verification** | [`flags2.17?BotVerification`](type/BotVerification) | NOTHING |
| **stargifts_count** | [`flags2.18?int`](type/int) | NOTHING |
| **send_paid_messages_stars** | [`flags2.21?long`](type/long) | NOTHING |

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
	id : -4414521395666768979,
	about : 'QLaRP08NmujieZVn',
	participants_count : 61,
	admins_count : 86,
	kicked_count : 100,
	banned_count : 87,
	online_count : 68,
	read_inbox_max_id : 22,
	read_outbox_max_id : 72,
	unread_count : 60,
	chat_photo : $client->photoEmpty(
		id : -5420362209868169023,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : true,
		mute_until : 30,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : true,
		stories_hide_sender : false,
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
	exported_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'iZU8soh3PzjBIvCG',
		admin_id : 2012401038859482642,
		date : 83,
		start_date : 2,
		expire_date : 30,
		usage_limit : 3,
		usage : 94,
		requested : 85,
		subscription_expired : 5,
		title : '6D3TYGJnxybFdpae',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 54,
			amount : 8245753336003654848,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : -4967290219041188747,
			description : '3kdZyGQ92rVT4mIH',
			description_photo : $client->photoEmpty(
				id : 6964645087652363355,
			),
			description_document : $client->documentEmpty(
				id : 1355746451273434088,
			),
			commands : array(
				$client->botCommand(
					command : 'bCn5hEYW3B9tseIq',
					description : 'hCT6b9FOg8tPlceq',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : '&?5?,LiveProtoaP??',
				background_color : 3,
				background_dark_color : 88,
				header_color : 55,
				header_dark_color : 67,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : 1319588362605978176,
				company : 'ysGtjIbmZc5YLgzH',
				custom_description : 'g5J3OyQ9kWU0F6TG',
			),
		),
	),
	migrated_from_chat_id : -7474099743879922896,
	migrated_from_max_id : 58,
	pinned_msg_id : 16,
	stickerset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 51,
		id : 1600730789639333721,
		access_hash : 5202452880844068640,
		title : '6evlk7tLUafM1T3q',
		short_name : 'ZjnwX4vRFesI1z7T',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'Rmp4HzXM13sTFoAf',
			),
			$client->photoSize(
				type : '3IWupqOdK9PmLCDY',
				w : 78,
				h : 3,
				size : 59,
			),
			$client->photoCachedSize(
				type : 'QYhdU1iBZIzKefn0',
				w : 49,
				h : 92,
				bytes : 'q?i?kLiveProto?&l',
			),
			$client->photoStrippedSize(
				type : 'J1fsHwNbiq8QmD7R',
				bytes : '`x?	LiveProto{??C?',
			),
			$client->photoSizeProgressive(
				type : 'rFcWVOjtMGRDvCm8',
				w : 33,
				h : 30,
				sizes : array(21),
			),
			$client->photoPathSize(
				type : 'YVRzFGbD1P9s30yx',
				bytes : '$??b1LiveProtoB5?+?',
			),
		),
		thumb_dc_id : 31,
		thumb_version : 44,
		thumb_document_id : -6863062338882464826,
		count : 68,
		hash : 50,
	),
	available_min_id : 61,
	folder_id : 26,
	linked_chat_id : -6642574424905482549,
	location : $client->channelLocationEmpty(),
	slowmode_seconds : 80,
	slowmode_next_send_date : 34,
	stats_dc : 54,
	pts : 3,
	call : $client->inputGroupCall(
		id : 6037407975491520081,
		access_hash : 8866159767749912025,
	),
	ttl_period : 37,
	pending_suggestions : array('YUOsxaH3FQg617bT'),
	groupcall_default_join_as : $client->peerUser(
		user_id : -1929024850449236808,
	),
	theme_emoticon : 'ROM8gvWEeoUK4PZ0',
	requests_pending : 4,
	recent_requesters : array(-4985234866741117386),
	default_send_as : $client->peerUser(
		user_id : 4896405532985413539,
	),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 26,
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : -2854083484751827460,
		),
		max_read_id : 20,
		stories : array(
			$client->storyItemDeleted(
				id : 18,
			),
			$client->storyItemSkipped(
				close_friends : true,
				id : 69,
				date : 9,
				expire_date : 12,
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
				id : 97,
				date : 43,
				from_id : $client->peerUser(...),
				fwd_from : $client->storyFwdHeader(...),
				expire_date : 83,
				caption : 'h12ES4ZPJ7dXpBvs',
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
				albums : array(92),
			),
		),
	),
	wallpaper : $client->wallPaper(
		id : 6766967468691856480,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 350707727406674665,
		slug : 'pK7IQLBHSYXCrsW3',
		document : $client->documentEmpty(
			id : 631664245352797867,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 51,
			second_background_color : 93,
			third_background_color : 63,
			fourth_background_color : 6,
			intensity : 89,
			rotation : 98,
			emoticon : 'qJES2F5nRh3fGPxl',
		),
	),
	boosts_applied : 96,
	boosts_unrestrict : 92,
	emojiset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 63,
		id : 2961697402171609760,
		access_hash : 4770964240865893015,
		title : 'WVl5HguUoK39bTBM',
		short_name : 'TnGdBlvzmeAIwSWy',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'DAR17PyCvjFpr0bY',
			),
			$client->photoSize(
				type : 'JqCFgbOlGw8YsQ0W',
				w : 13,
				h : 51,
				size : 90,
			),
			$client->photoCachedSize(
				type : 'DmuG2LlObkPI68Nz',
				w : 26,
				h : 53,
				bytes : '????qLiveProtodpѾ?',
			),
			$client->photoStrippedSize(
				type : 'azmlZ5HyPngoQMwx',
				bytes : 'YD??LiveProto4?A?J',
			),
			$client->photoSizeProgressive(
				type : 'IYLivyxsStZ7GRNh',
				w : 56,
				h : 31,
				sizes : array(3),
			),
			$client->photoPathSize(
				type : 'GZp89unotx5dlrKi',
				bytes : '????LiveProto??{?y',
			),
		),
		thumb_dc_id : 77,
		thumb_version : 91,
		thumb_document_id : -6936622140411320181,
		count : 75,
		hash : 4,
	),
	bot_verification : $client->botVerification(
		bot_id : 4368692656084210001,
		icon : 2550770730032192720,
		description : 'hOVUYjMoqy9ZNtkT',
	),
	stargifts_count : 22,
	send_paid_messages_stars : -6593125462539006436,
);
```