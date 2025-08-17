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
	id : 4679640700491088293,
	about : 'T2deYjEANtukL14V',
	participants_count : 27,
	admins_count : 33,
	kicked_count : 76,
	banned_count : 12,
	online_count : 87,
	read_inbox_max_id : 67,
	read_outbox_max_id : 75,
	unread_count : 24,
	chat_photo : $client->photoEmpty(
		id : -5835598961199218939,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : $client->boolFalse(),
		silent : $client->boolFalse(),
		mute_until : 50,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : $client->boolFalse(),
		stories_hide_sender : $client->boolFalse(),
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
	exported_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'HvAF5kpYS8dRmWhI',
		admin_id : 2247696348312768755,
		date : 16,
		start_date : 31,
		expire_date : 87,
		usage_limit : 18,
		usage : 74,
		requested : 84,
		subscription_expired : 49,
		title : '1yzNn9h2835gplFx',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 86,
			amount : -6814150310856697160,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 3869793054522668303,
			description : '5NGbUyEn6KdHgo7Z',
			description_photo : $client->photoEmpty(
				id : 5546465841152363548,
			),
			description_document : $client->documentEmpty(
				id : -35649358162352277,
			),
			commands : array(
				$client->botCommand(
					command : '1QL25wTzNjeoKt0d',
					description : 'sVHFRuAb2w3qZmga',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : '' . "\0" . '?C?LiveProto??sm?',
				background_color : 77,
				background_dark_color : 67,
				header_color : 46,
				header_dark_color : 99,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -611959052248775851,
				company : 'QAzBSFWOE76ilV2t',
				custom_description : 'aGmjAeRL47rIt30O',
			),
		),
	),
	migrated_from_chat_id : -8698357316855293374,
	migrated_from_max_id : 57,
	pinned_msg_id : 99,
	stickerset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 9,
		id : 6214720085048467465,
		access_hash : -5778152658605856439,
		title : 'iFKRkcob8V70SahX',
		short_name : 'vwj7fs1nzKhTMUSC',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'KzS71wDpjZT5UPiW',
			),
			$client->photoSize(
				type : 'So8FtQH6Upn4Jwjl',
				w : 55,
				h : 28,
				size : 57,
			),
			$client->photoCachedSize(
				type : '9wJ7Qp0uqXF8sNUL',
				w : 37,
				h : 67,
				bytes : '?
??LiveProto?e[?',
			),
			$client->photoStrippedSize(
				type : 'iWPEKHdfv14D5ntj',
				bytes : 'A?e2eLiveProtoc????',
			),
			$client->photoSizeProgressive(
				type : 'Yj9Mtomcnr2L8IBw',
				w : 43,
				h : 41,
				sizes : array(35),
			),
			$client->photoPathSize(
				type : 'qR9mX2tyDBJzsjae',
				bytes : '0????LiveProto?T@?',
			),
		),
		thumb_dc_id : 76,
		thumb_version : 11,
		thumb_document_id : 2491628553526131731,
		count : 80,
		hash : 34,
	),
	available_min_id : 44,
	folder_id : 84,
	linked_chat_id : -5616253832942177776,
	location : $client->channelLocationEmpty(),
	slowmode_seconds : 8,
	slowmode_next_send_date : 20,
	stats_dc : 36,
	pts : 85,
	call : $client->inputGroupCall(
		id : 2451270809099316625,
		access_hash : 3180645346317342610,
	),
	ttl_period : 8,
	pending_suggestions : array('9Uona805R6dfJQGz'),
	groupcall_default_join_as : $client->peerUser(
		user_id : 3189595817693630732,
	),
	theme_emoticon : 'ScWh9bTXiIuFK76m',
	requests_pending : 69,
	recent_requesters : array(-1498824620740600883),
	default_send_as : $client->peerUser(
		user_id : 6075645751580167301,
	),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 86,
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : -689843652429938127,
		),
		max_read_id : 37,
		stories : array(
			$client->storyItemDeleted(
				id : 55,
			),
			$client->storyItemSkipped(
				close_friends : true,
				id : 11,
				date : 4,
				expire_date : 69,
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
				id : 27,
				date : 5,
				from_id : $client->peerUser(...),
				fwd_from : $client->storyFwdHeader(...),
				expire_date : 92,
				caption : 'uEJpjdTLngNRCkFb',
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
				albums : array(71),
			),
		),
	),
	wallpaper : $client->wallPaper(
		id : -8680938321444730134,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -5699532070286479185,
		slug : 'EbZrKnfTmLFk8qQ2',
		document : $client->documentEmpty(
			id : 2376722764318614325,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 52,
			second_background_color : 83,
			third_background_color : 63,
			fourth_background_color : 89,
			intensity : 60,
			rotation : 59,
			emoticon : 'SteJq5bUpgQZ01KB',
		),
	),
	boosts_applied : 99,
	boosts_unrestrict : 93,
	emojiset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 56,
		id : -5506155450133745004,
		access_hash : -599604619137879979,
		title : 'Mg8rjaKQDtNocymY',
		short_name : 'FBKimXreL548vEJP',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'jbsMIGY1qB5PmVCD',
			),
			$client->photoSize(
				type : 'nfRGPQmwg1Xc9ypV',
				w : 41,
				h : 96,
				size : 81,
			),
			$client->photoCachedSize(
				type : 'ST1lf9bAUBCHwOax',
				w : 0,
				h : 12,
				bytes : '?ފN?LiveProto?????',
			),
			$client->photoStrippedSize(
				type : 'n05XK8apofchSd1s',
				bytes : '_@=X' . "\0" . 'LiveProto???-f',
			),
			$client->photoSizeProgressive(
				type : 'vAeqRFtDGcpNPQ9i',
				w : 0,
				h : 63,
				sizes : array(55),
			),
			$client->photoPathSize(
				type : 'lmOY4H65Bw2gn8xG',
				bytes : '?-w?]LiveProto??Վ?',
			),
		),
		thumb_dc_id : 31,
		thumb_version : 34,
		thumb_document_id : -1933137257033691958,
		count : 9,
		hash : 99,
	),
	bot_verification : $client->botVerification(
		bot_id : 3713821946778320310,
		icon : -7238905983551714550,
		description : 'LqxasPtIMKU2jiRf',
	),
	stargifts_count : 14,
	send_paid_messages_stars : 3690922295648986293,
);
```