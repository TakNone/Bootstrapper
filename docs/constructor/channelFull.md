# channelFull

**Description** : *Full info about a channel, supergroup or gigagroup*

**Layer** : 218

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
	id : -4291499056947768017,
	about : 'GaMJAlDpkQiK6WV3',
	participants_count : 55,
	admins_count : 39,
	kicked_count : 83,
	banned_count : 53,
	online_count : 20,
	read_inbox_max_id : 65,
	read_outbox_max_id : 82,
	unread_count : 61,
	chat_photo : $client->photoEmpty(
		id : -2556659866217681141,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : false,
		mute_until : 33,
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
		link : '6x2QinYeRAkf83VK',
		admin_id : 7667526097220958951,
		date : 25,
		start_date : 21,
		expire_date : 65,
		usage_limit : 34,
		usage : 67,
		requested : 92,
		subscription_expired : 62,
		title : 'q0DiZJLCr29XuMNm',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 84,
			amount : 8588963160564062681,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 8974358614635180137,
			description : 'uebiwUv2rO8KXlSR',
			description_photo : $client->photoEmpty(
				id : 8799305030260026087,
			),
			description_document : $client->documentEmpty(
				id : 2823760570186579532,
			),
			commands : array(
				$client->botCommand(
					command : 'dZ1mzgobxkR08LUA',
					description : 'VYAzUWkGsJuPj2Cc',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 23,
				background_dark_color : 49,
				header_color : 96,
				header_dark_color : 65,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : 6012085816261947147,
				company : 'qJLrsM90KHFbDCgW',
				custom_description : 'mJLs05e6fPodkXKS',
			),
		),
	),
	migrated_from_chat_id : -3987067262186580056,
	migrated_from_max_id : 54,
	pinned_msg_id : 73,
	stickerset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 18,
		id : -8532065167745394937,
		access_hash : -2407986180706979372,
		title : 'IUmWoNVQ6hx4HjCJ',
		short_name : 'vnpwjLVIQmBAdyki',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'KQIAg5BLpa8PEFSM',
			),
			$client->photoSize(
				type : 'qNSlUj5K7TDwytGP',
				w : 65,
				h : 65,
				size : 38,
			),
			$client->photoCachedSize(
				type : 'QDuTJmzq1ePCox3Z',
				w : 11,
				h : 36,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '1MiTSK6g5lfwhdH4',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'SQ4swXZiKcqeTmhk',
				w : 84,
				h : 8,
				sizes : array(39),
			),
			$client->photoPathSize(
				type : 'BlOdJxF80yMLn2uS',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 62,
		thumb_version : 56,
		thumb_document_id : -7474093101422351369,
		count : 96,
		hash : 0,
	),
	available_min_id : 95,
	folder_id : 46,
	linked_chat_id : -1770290311264929682,
	location : $client->channelLocationEmpty(),
	slowmode_seconds : 4,
	slowmode_next_send_date : 49,
	stats_dc : 21,
	pts : 100,
	call : $client->inputGroupCall(
		id : -8065759338495337440,
		access_hash : 6208723027039092498,
	),
	ttl_period : 4,
	pending_suggestions : array('0CutGdVZrPaRn8yA'),
	groupcall_default_join_as : $client->peerUser(
		user_id : -5766930857988687694,
	),
	theme_emoticon : 'dCqJbn5gNzp6Ex1i',
	requests_pending : 3,
	recent_requesters : array(6204310233630409412),
	default_send_as : $client->peerUser(
		user_id : 9115320243223651098,
	),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 46,
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : 5302386668575799171,
		),
		max_read_id : 28,
		stories : array(
			$client->storyItemDeleted(
				id : 49,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 30,
				date : 26,
				expire_date : 9,
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
				id : 38,
				date : 30,
				from_id : $client->peerUser(
					user_id : -1655248643948522055,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'KmE5Q6v3s0W1ZSRu',
					story_id : 89,
				),
				expire_date : 31,
				caption : 'WoBgDRvrVdTJ76pF',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 47,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 10,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 59,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 50,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 95,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 68,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 34,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 36,
						language : 'rpqEfagJcbCFZ3d0',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 25,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 38,
						user_id : 7714616920269865471,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 83,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 83,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 21,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 59,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 93,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 17,
						document_id : -3646136241570376336,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 70,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'fU5ZdwNSBnjX2A9V',
						address : 'e8PERHYCVB2nNKIv',
						provider : 'i0vm3odhcWYBk8yA',
						venue_id : 'cH7vsenad0umEoAg',
						venue_type : 'Sn1ZHd7jJYtlTCMy',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : -1624614143220058680,
						result_id : '5WM9pNQYBrcjlA6s',
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
						channel_id : -7356597810528796196,
						msg_id : 43,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 38,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'Lfjlr09FGgKCSnMD',
						temperature_c : 1218396.7080078125,
						color : 89,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'VEc1zo7TdMClrnap',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(4212775499066521271),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(-5691413950447388067),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(4854815358025016835),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(-1463735937772387943),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 5,
					forwards_count : 87,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 3,
					recent_viewers : array(3441609489888524565),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(17),
			),
		),
	),
	wallpaper : $client->wallPaper(
		id : -7216465229407461582,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 8880416033561456425,
		slug : 'QSVrcBMx2jkqdnWL',
		document : $client->documentEmpty(
			id : -3987088822873298529,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 69,
			second_background_color : 51,
			third_background_color : 70,
			fourth_background_color : 49,
			intensity : 68,
			rotation : 93,
			emoticon : 'dXiOBN7ayseIqvR0',
		),
	),
	boosts_applied : 53,
	boosts_unrestrict : 72,
	emojiset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 77,
		id : -7553838935123061854,
		access_hash : 7076298518757959428,
		title : 'jXbSghT3EZBk7cm9',
		short_name : 'ygB4n86huqZcNalW',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'XwczEpTYjqHLdrK4',
			),
			$client->photoSize(
				type : '30FX8GNu76YylgZv',
				w : 37,
				h : 54,
				size : 4,
			),
			$client->photoCachedSize(
				type : '7mGs1D5uKiZvHlOz',
				w : 63,
				h : 20,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'Ch6oMiHtkuwXsBdy',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : '9COlwZDq6trVKX2R',
				w : 100,
				h : 9,
				sizes : array(79),
			),
			$client->photoPathSize(
				type : 'cS9BbVdvDFNge2aG',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 11,
		thumb_version : 11,
		thumb_document_id : 3181154130435728188,
		count : 59,
		hash : 0,
	),
	bot_verification : $client->botVerification(
		bot_id : -8565631535788325268,
		icon : -3395852457522771302,
		description : 'yCcwUz2D3x9jpKtO',
	),
	stargifts_count : 53,
	send_paid_messages_stars : 8069253890738942558,
	main_tab : $client->profileTabPosts(),
);
```