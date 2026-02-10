# channelFull

**Description** : *Full info about a channel, supergroup or gigagroup*

**Layer** : 222

```tl
channelFull#e4e0b29d flags:# can_view_participants:flags.3?true can_set_username:flags.6?true can_set_stickers:flags.7?true hidden_prehistory:flags.10?true can_set_location:flags.16?true has_scheduled:flags.19?true can_view_stats:flags.20?true blocked:flags.22?true flags2:# can_delete_channel:flags2.0?true antispam:flags2.1?true participants_hidden:flags2.2?true translations_disabled:flags2.3?true stories_pinned_available:flags2.5?true view_forum_as_messages:flags2.6?true restricted_sponsored:flags2.11?true can_view_revenue:flags2.12?true paid_media_allowed:flags2.14?true can_view_stars_revenue:flags2.15?true paid_reactions_available:flags2.16?true stargifts_available:flags2.19?true paid_messages_available:flags2.20?true id:long about:string participants_count:flags.0?int admins_count:flags.1?int kicked_count:flags.2?int banned_count:flags.2?int online_count:flags.13?int read_inbox_max_id:int read_outbox_max_id:int unread_count:int chat_photo:Photo notify_settings:PeerNotifySettings exported_invite:flags.23?ExportedChatInvite bot_info:Vector<BotInfo> migrated_from_chat_id:flags.4?long migrated_from_max_id:flags.4?int pinned_msg_id:flags.5?int stickerset:flags.8?StickerSet available_min_id:flags.9?int folder_id:flags.11?int linked_chat_id:flags.14?long location:flags.15?ChannelLocation slowmode_seconds:flags.17?int slowmode_next_send_date:flags.18?int stats_dc:flags.12?int pts:int call:flags.21?InputGroupCall ttl_period:flags.24?int pending_suggestions:flags.25?Vector<string> groupcall_default_join_as:flags.26?Peer theme_emoticon:flags.27?string requests_pending:flags.28?int recent_requesters:flags.28?Vector<long> default_send_as:flags.29?Peer available_reactions:flags.30?ChatReactions reactions_limit:flags2.13?int stories:flags2.4?PeerStories wallpaper:flags2.7?WallPaper boosts_applied:flags2.8?int boosts_unrestrict:flags2.9?int emojiset:flags2.10?StickerSet bot_verification:flags2.17?BotVerification stargifts_count:flags2.18?int send_paid_messages_stars:flags2.21?long main_tab:flags2.22?ProfileTab = ChatFull;
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
| **blocked** | [`flags.22?true`](type/true) | Whether any anonymous admin of this supergroup was blocked: if set, you won't receive messages from anonymous group admins in discussion replies via @replies |
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
	id : 5799768093499348537,
	about : 'FxNC1qkYMd5aHylR',
	participants_count : 68,
	admins_count : 83,
	kicked_count : 65,
	banned_count : 18,
	online_count : 20,
	read_inbox_max_id : 13,
	read_outbox_max_id : 95,
	unread_count : 38,
	chat_photo : $client->photoEmpty(
		id : -27397453450391166,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : true,
		mute_until : 21,
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
		link : 'f1S2eJQVTmvHO5gc',
		admin_id : -4758556399695498554,
		date : 97,
		start_date : 99,
		expire_date : 38,
		usage_limit : 98,
		usage : 82,
		requested : 64,
		subscription_expired : 26,
		title : '5wcaxBFmHT2IkDtp',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 12,
			amount : -5579996002895141295,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : -7282355606677843840,
			description : 'xG82c9KZvfX4gA7y',
			description_photo : $client->photoEmpty(
				id : -2256145118595266526,
			),
			description_document : $client->documentEmpty(
				id : -7227990439276316965,
			),
			commands : array(
				$client->botCommand(
					command : 'qsuLp4NtDZbl5vCJ',
					description : 'C7PaTreuSzdGcR2o',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 44,
				background_dark_color : 20,
				header_color : 21,
				header_dark_color : 4,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -7185363105237140249,
				company : 'EsatQT4W5NVzcDrI',
				custom_description : 'ilHNgb3zKwBYS8Js',
			),
		),
	),
	migrated_from_chat_id : -7022948345799310666,
	migrated_from_max_id : 57,
	pinned_msg_id : 51,
	stickerset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 64,
		id : 8702200283036280666,
		access_hash : 6541138461481418996,
		title : 'i91IfE4OpTn6AeY2',
		short_name : 'biRGgYNvSLBXsQHt',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'd203zj56QHZGMIJN',
			),
			$client->photoSize(
				type : 't8eEJkKn0M7BLDv5',
				w : 61,
				h : 19,
				size : 25,
			),
			$client->photoCachedSize(
				type : 'AXIKPuHVnR3lEiLw',
				w : 52,
				h : 40,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'mEBPLJVtGoupjZIl',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : '01h7XJk8OIRSxnas',
				w : 71,
				h : 80,
				sizes : array(35),
			),
			$client->photoPathSize(
				type : 'dB9hL0nRlUYIguFe',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 31,
		thumb_version : 51,
		thumb_document_id : 1225659776713309099,
		count : 73,
		hash : 0,
	),
	available_min_id : 22,
	folder_id : 22,
	linked_chat_id : -341466253780945054,
	location : $client->channelLocationEmpty(),
	slowmode_seconds : 35,
	slowmode_next_send_date : 79,
	stats_dc : 21,
	pts : 41,
	call : $client->inputGroupCall(
		id : 7387767707196369148,
		access_hash : 8195939580721536510,
	),
	ttl_period : 83,
	pending_suggestions : array('RUXBKwtLTcAQbmHk'),
	groupcall_default_join_as : $client->peerUser(
		user_id : -5398826313782475878,
	),
	theme_emoticon : 'j0IZzi3oqyEeFQRT',
	requests_pending : 33,
	recent_requesters : array(8084557495128240783),
	default_send_as : $client->peerUser(
		user_id : 8368804144016000219,
	),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 32,
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : -303371939072155731,
		),
		max_read_id : 59,
		stories : array(
			$client->storyItemDeleted(
				id : 44,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 63,
				date : 62,
				expire_date : 7,
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
				id : 33,
				date : 31,
				from_id : $client->peerUser(
					user_id : 2935487602194752337,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'LIfugz6WNXyHtGph',
					story_id : 87,
				),
				expire_date : 67,
				caption : 'cr6hNmUTbsMg02Kj',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 62,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 88,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 46,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 66,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 32,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 11,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 36,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 98,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 13,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 97,
						language : '96tgiCMOL5e2VamN',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 55,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 40,
						user_id : -4111850027347416732,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 37,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 99,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 11,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 62,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 50,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 55,
						document_id : 2872400730238709360,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 68,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : '3PUmZ1RQq0YHS7tM',
						address : 'av84O96QJCSbWjdr',
						provider : 'r9ZYw746avIc2n3h',
						venue_id : 'Ps3fKtuy7rUJW0Vp',
						venue_type : '74wdxrZThqFec3UJ',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : -3873382830848363916,
						result_id : 'WH5hO84RoMrxeZnS',
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
						channel_id : 1403858830464749557,
						msg_id : 89,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 90,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : '1N3jelF4STo8VXpY',
						temperature_c : -1291448.5859375,
						color : 56,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'v6kmqEStuzPRGA1f',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(7230208945327650809),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(3653018281234777893),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(-7001747903825681481),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(5714716568968714217),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 40,
					forwards_count : 17,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 52,
					recent_viewers : array(9153600683886759687),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(11),
			),
		),
	),
	wallpaper : $client->wallPaper(
		id : -7611046621934485059,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -9143662908255993123,
		slug : 'aiQqSnVRFOhycXz5',
		document : $client->documentEmpty(
			id : -5326904015864466110,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 41,
			second_background_color : 99,
			third_background_color : 12,
			fourth_background_color : 40,
			intensity : 56,
			rotation : 68,
			emoticon : 'fcow9puY0dMPX63Q',
		),
	),
	boosts_applied : 7,
	boosts_unrestrict : 29,
	emojiset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 55,
		id : -441461161465821500,
		access_hash : -668261052199421320,
		title : 'frSpLPwxGa7VonHd',
		short_name : 'g83CQEuLVTvroWwM',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'IpCW9Du7yMdKHJSf',
			),
			$client->photoSize(
				type : '8Ni0M9DTqExdmsW6',
				w : 89,
				h : 97,
				size : 42,
			),
			$client->photoCachedSize(
				type : 'Q0xCU5ELnoRHz1bd',
				w : 78,
				h : 73,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'SvoBM9L7wYizjNXH',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : '5jRwWQ06dUv1mV7B',
				w : 15,
				h : 57,
				sizes : array(15),
			),
			$client->photoPathSize(
				type : 'UCsjNlV9r5Oz6yvm',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 25,
		thumb_version : 36,
		thumb_document_id : -5539753108520634534,
		count : 73,
		hash : 0,
	),
	bot_verification : $client->botVerification(
		bot_id : -4923750833522336909,
		icon : -3811553206957128940,
		description : 'MfSRyLFqTQ7zmBXP',
	),
	stargifts_count : 96,
	send_paid_messages_stars : 6456879137519686955,
	main_tab : $client->profileTabPosts(),
);
```