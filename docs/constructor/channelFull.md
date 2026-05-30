# channelFull

**Description** : *Full info about a channel, supergroup or gigagroup*

**Layer** : 225

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
	id : -7620802436544474056,
	about : '4ND2CtGRnAMvTuqF',
	participants_count : 51,
	admins_count : 59,
	kicked_count : 97,
	banned_count : 93,
	online_count : 44,
	read_inbox_max_id : 81,
	read_outbox_max_id : 91,
	unread_count : 82,
	chat_photo : $client->photoEmpty(
		id : 2480061593353421569,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : true,
		mute_until : 97,
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
		link : '3l4xMUumCsvdknYj',
		admin_id : -7884745379551501006,
		date : 0,
		start_date : 68,
		expire_date : 25,
		usage_limit : 7,
		usage : 95,
		requested : 83,
		subscription_expired : 85,
		title : 'v0RpOsG3B9yUXAmZ',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 10,
			amount : -7278941812849675369,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 3700309541218160485,
			description : 'atXAhfUO7nMLQkN6',
			description_photo : $client->photoEmpty(
				id : 5365894356117885334,
			),
			description_document : $client->documentEmpty(
				id : 2512679473637730074,
			),
			commands : array(
				$client->botCommand(
					command : '0kyvawoDthgRH6MY',
					description : 'kGyV3sLKX2UgOuZ5',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 8,
				background_dark_color : 77,
				header_color : 54,
				header_dark_color : 62,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : 125391343998346675,
				company : 'VzcKMdvBFiIq5Xxw',
				custom_description : '8gO4hSMeB0A3oknX',
			),
		),
	),
	migrated_from_chat_id : -7071251695692863844,
	migrated_from_max_id : 74,
	pinned_msg_id : 7,
	stickerset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 61,
		id : -9201444096959630573,
		access_hash : 7157782487730430807,
		title : 'FLKa7W4RGqrIPhsE',
		short_name : 'WLnXAYz759DMZUdF',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'kJadOtpb0Y7vhCMH',
			),
			$client->photoSize(
				type : 'k0g7ZF9xLoMyvUP6',
				w : 43,
				h : 36,
				size : 40,
			),
			$client->photoCachedSize(
				type : 'pQurlcaEgvRUNqBo',
				w : 59,
				h : 30,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'VdPZIzcbseTCGU4q',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'h5INUM4B1ys6qRZt',
				w : 94,
				h : 49,
				sizes : array(75),
			),
			$client->photoPathSize(
				type : 'bWQYorMtnDENHzLZ',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 16,
		thumb_version : 35,
		thumb_document_id : 1054671036689002245,
		count : 27,
		hash : 0,
	),
	available_min_id : 77,
	folder_id : 77,
	linked_chat_id : 674189251550352209,
	location : $client->channelLocationEmpty(),
	slowmode_seconds : 59,
	slowmode_next_send_date : 61,
	stats_dc : 70,
	pts : 39,
	call : $client->inputGroupCall(
		id : -5133051812122059618,
		access_hash : -4783178252130529353,
	),
	ttl_period : 41,
	pending_suggestions : array('XsxZqiwfJWE8kecg'),
	groupcall_default_join_as : $client->peerUser(
		user_id : 6429355702257934434,
	),
	theme_emoticon : 'vRQBs0ojzkiJMprT',
	requests_pending : 41,
	recent_requesters : array(4851411288116395445),
	default_send_as : $client->peerUser(
		user_id : -5830949862575640920,
	),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 36,
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : 6334262012234541407,
		),
		max_read_id : 34,
		stories : array(
			$client->storyItemDeleted(
				id : 67,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 64,
				date : 71,
				expire_date : 34,
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
				id : 7,
				date : 19,
				from_id : $client->peerUser(
					user_id : -8307312667279045384,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : '6VhO0sEbNnefyFcL',
					story_id : 10,
				),
				expire_date : 38,
				caption : 'yBYSgV4L1MDlqHos',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 58,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 28,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 43,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 87,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 23,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 0,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 78,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 65,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 72,
						language : 'PKcqDmdGX1AevQjR',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 74,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 40,
						user_id : 5272534946456847849,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 8,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 15,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 74,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 30,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 23,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 41,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 18,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 77,
						document_id : -6481619581370331882,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 25,
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
						date : 24,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 52,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 40,
						old_text : 's4GKYHXQozxlMtjJ',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 93,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : '3b9ZVNjxS7KcJYaw',
						address : 'MBEn64LNwmAOrgzU',
						provider : 'NHgEX1wDuQodjYCl',
						venue_id : 'BkIpyZ0HCdsLmz7O',
						venue_type : 'tYLFho97CxN0pi2d',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : -7080692964621334830,
						result_id : 'J3b2R9I6mHSfzjer',
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
						channel_id : 936820574027450569,
						msg_id : 64,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 41,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'b2NELQBCzyGrwtTs',
						temperature_c : 1299249.6376953125,
						color : 45,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : '7gaEjXo2W1iJ6nhu',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(-1682533197176448395),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(5340910945838430582),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(4577731668539608440),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(2098815253321866149),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 97,
					forwards_count : 55,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 17,
					recent_viewers : array(-1274284655319719838),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(41),
				music : $client->documentEmpty(
					id : 6029079763435276757,
				),
			),
		),
	),
	wallpaper : $client->wallPaper(
		id : 533455987039138805,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 5621374643836318889,
		slug : 'Ie1ET0kqOJCSRsov',
		document : $client->documentEmpty(
			id : -731837102205337353,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 39,
			second_background_color : 62,
			third_background_color : 23,
			fourth_background_color : 11,
			intensity : 51,
			rotation : 24,
			emoticon : 'gPQJ5k6bTVCUNLtn',
		),
	),
	boosts_applied : 17,
	boosts_unrestrict : 24,
	emojiset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 34,
		id : -5865825557255272911,
		access_hash : 3274836372900603268,
		title : 'KnCBsRIxek6Xwz7d',
		short_name : 'wHGUQbnRATcYPhmg',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'VDoMc5kjs47CxGw1',
			),
			$client->photoSize(
				type : 'U985VdBoSQalqGH6',
				w : 99,
				h : 37,
				size : 68,
			),
			$client->photoCachedSize(
				type : 'y7cWroJ1V5EIBdqj',
				w : 77,
				h : 57,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'pNxrvGuZPYjOQg3U',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'Q9gayticpHReszVw',
				w : 60,
				h : 37,
				sizes : array(52),
			),
			$client->photoPathSize(
				type : 'GHETSRo1LFVsn2gU',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 71,
		thumb_version : 60,
		thumb_document_id : -4056740945917719629,
		count : 45,
		hash : 0,
	),
	bot_verification : $client->botVerification(
		bot_id : 8130835575560630229,
		icon : -231929119201949535,
		description : 'UsoHmfAvc17pYeLB',
	),
	stargifts_count : 100,
	send_paid_messages_stars : 5415094325962767716,
	main_tab : $client->profileTabPosts(),
);
```