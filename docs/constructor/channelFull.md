# channelFull

**Description** : *Full info about a channel, supergroup or gigagroup*

**Layer** : 214

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
| **main_tab** | [`flags2.22?ProfileTab`](type/ProfileTab) | NOTHING |

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
	id : 7704322522667341222,
	about : '7klgStJHfhQ8PB6c',
	participants_count : 97,
	admins_count : 21,
	kicked_count : 67,
	banned_count : 4,
	online_count : 91,
	read_inbox_max_id : 30,
	read_outbox_max_id : 83,
	unread_count : 74,
	chat_photo : $client->photoEmpty(
		id : -1239759038347042721,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : false,
		mute_until : 8,
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
		link : '1MsVn9HZCmbxNXDl',
		admin_id : 7767151564085578043,
		date : 30,
		start_date : 97,
		expire_date : 31,
		usage_limit : 40,
		usage : 87,
		requested : 99,
		subscription_expired : 74,
		title : 'ulQ3xM5PfedLNWaH',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 31,
			amount : -3506826618309892132,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : -4010335154660128807,
			description : 'lVxendtpwybS9T8P',
			description_photo : $client->photoEmpty(
				id : -1760629456301269136,
			),
			description_document : $client->documentEmpty(
				id : -2848804247195299898,
			),
			commands : array(
				$client->botCommand(
					command : 'UWbA9z0Sh4ijQ8pr',
					description : 'bjYR6ZE3q1oeG9KH',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 10,
				background_dark_color : 82,
				header_color : 73,
				header_dark_color : 17,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -3194158856776338752,
				company : 'fCiOT62K3ZBYM4mr',
				custom_description : '92zgFDZ5Pbdxq6Sa',
			),
		),
	),
	migrated_from_chat_id : 4449741958293630821,
	migrated_from_max_id : 88,
	pinned_msg_id : 90,
	stickerset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 69,
		id : -3009711109731505625,
		access_hash : -7381991744130642572,
		title : '5By7xjG4adwFzSnl',
		short_name : 'HvUe5s8tkXBN2qcM',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'XdHYxQAFR5uPTrgO',
			),
			$client->photoSize(
				type : 'SvaOL2VQ9lrgWs8Z',
				w : 82,
				h : 6,
				size : 74,
			),
			$client->photoCachedSize(
				type : 'UdQYDiTj3Eopqg7C',
				w : 79,
				h : 48,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'x1aQFOy7DjdsNZpC',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'ZmjDK64XWQOgCq1U',
				w : 52,
				h : 38,
				sizes : array(48),
			),
			$client->photoPathSize(
				type : 'iPA39UapHCkouEO4',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 19,
		thumb_version : 48,
		thumb_document_id : -8629038403026369139,
		count : 90,
		hash : 0,
	),
	available_min_id : 84,
	folder_id : 83,
	linked_chat_id : -6070722826892823149,
	location : $client->channelLocationEmpty(),
	slowmode_seconds : 86,
	slowmode_next_send_date : 66,
	stats_dc : 94,
	pts : 27,
	call : $client->inputGroupCall(
		id : 7387843696472493525,
		access_hash : 6673494317597391022,
	),
	ttl_period : 47,
	pending_suggestions : array('eofSV8UcFxKQlyIm'),
	groupcall_default_join_as : $client->peerUser(
		user_id : -8468136753689963709,
	),
	theme_emoticon : '9oZ23DbSTz0Gpy5E',
	requests_pending : 94,
	recent_requesters : array(1640727370967964359),
	default_send_as : $client->peerUser(
		user_id : -8734173730202137056,
	),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 72,
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : -6135765389153581352,
		),
		max_read_id : 77,
		stories : array(
			$client->storyItemDeleted(
				id : 66,
			),
			$client->storyItemSkipped(
				close_friends : true,
				id : 69,
				date : 39,
				expire_date : 71,
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
				id : 57,
				date : 42,
				from_id : $client->peerUser(...),
				fwd_from : $client->storyFwdHeader(...),
				expire_date : 22,
				caption : 'N48FGKXM0Iw5yscr',
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
				albums : array(96),
			),
		),
	),
	wallpaper : $client->wallPaper(
		id : 753869544669518649,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -2394819197267461217,
		slug : 'h2HKuzdM5QvYk8Jj',
		document : $client->documentEmpty(
			id : -7607929405073438024,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 100,
			second_background_color : 93,
			third_background_color : 47,
			fourth_background_color : 4,
			intensity : 92,
			rotation : 6,
			emoticon : 'yeGwX6FjhZkSoK5O',
		),
	),
	boosts_applied : 65,
	boosts_unrestrict : 69,
	emojiset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 51,
		id : 2691551179437296410,
		access_hash : 7741677351738471137,
		title : 'D0scAvN1e56xpUJB',
		short_name : 'qgunBG0tIJZbP8fl',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'fMtlLPxUgw36zybT',
			),
			$client->photoSize(
				type : 'VlfDCoJr2Qny068h',
				w : 97,
				h : 36,
				size : 69,
			),
			$client->photoCachedSize(
				type : 'DTBrizcx1FNbw3VP',
				w : 17,
				h : 70,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'xQI9WFC6hjvGVuP0',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'xFkJQb9SvW0gAGCY',
				w : 83,
				h : 0,
				sizes : array(56),
			),
			$client->photoPathSize(
				type : 'jsU7JPy18mYrXLeq',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 7,
		thumb_version : 66,
		thumb_document_id : -9191923302936019338,
		count : 1,
		hash : 0,
	),
	bot_verification : $client->botVerification(
		bot_id : -5270019641513485871,
		icon : -6292831636164233350,
		description : 'b4xR38FgUyTi9zLY',
	),
	stargifts_count : 71,
	send_paid_messages_stars : 8761465006442985050,
	main_tab : $client->profileTabPosts(),
);
```