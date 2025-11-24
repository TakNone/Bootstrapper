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
	id : -6504212160624371938,
	about : 'xQRkPVbr3NOvcnH4',
	participants_count : 40,
	admins_count : 64,
	kicked_count : 80,
	banned_count : 49,
	online_count : 64,
	read_inbox_max_id : 85,
	read_outbox_max_id : 0,
	unread_count : 33,
	chat_photo : $client->photoEmpty(
		id : 2246208412714843182,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : true,
		mute_until : 59,
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
		link : 'TQBIkRJPZe4vryjs',
		admin_id : 7699355333980585941,
		date : 27,
		start_date : 74,
		expire_date : 32,
		usage_limit : 1,
		usage : 14,
		requested : 34,
		subscription_expired : 100,
		title : 'mLTsVQpSzYfIi4aw',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 6,
			amount : -4171315759140234830,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 7074471299706536144,
			description : 'prsiVCDqjdA2t5XZ',
			description_photo : $client->photoEmpty(
				id : -6790296817667649780,
			),
			description_document : $client->documentEmpty(
				id : 808686985162009013,
			),
			commands : array(
				$client->botCommand(
					command : 'Phtk7eEB6cr2vyZY',
					description : 'PQFiDp9mh65wKJCn',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 37,
				background_dark_color : 74,
				header_color : 72,
				header_dark_color : 86,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -3805329563421209426,
				company : 'yuX5S7DMHxdoZWzp',
				custom_description : '8P2LoIlXkVbeQhid',
			),
		),
	),
	migrated_from_chat_id : -5057168258806320789,
	migrated_from_max_id : 32,
	pinned_msg_id : 73,
	stickerset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 3,
		id : 2799851502753113281,
		access_hash : 2618414624992910825,
		title : 'mbzvqKkDAcp4jGuE',
		short_name : 'OWgENpVijnSTv1KY',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'pa3DITQcXfBYj7Ax',
			),
			$client->photoSize(
				type : '6Kl4Oz8fxDZRrAH2',
				w : 96,
				h : 50,
				size : 65,
			),
			$client->photoCachedSize(
				type : 'XCO7NLU8aRTyHcK9',
				w : 32,
				h : 41,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'lkDezHY3JNrya8AL',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'zOmMXI7KjUtq5cQn',
				w : 35,
				h : 73,
				sizes : array(93),
			),
			$client->photoPathSize(
				type : 'k7I0C5F6EgbWNfj9',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 29,
		thumb_version : 22,
		thumb_document_id : 2558671608781999281,
		count : 93,
		hash : 0,
	),
	available_min_id : 52,
	folder_id : 86,
	linked_chat_id : -294921114379343032,
	location : $client->channelLocationEmpty(),
	slowmode_seconds : 47,
	slowmode_next_send_date : 63,
	stats_dc : 38,
	pts : 68,
	call : $client->inputGroupCall(
		id : 1655577161694868850,
		access_hash : -1787753710313171553,
	),
	ttl_period : 14,
	pending_suggestions : array('5W0G1rsHk3RvnpUA'),
	groupcall_default_join_as : $client->peerUser(
		user_id : -4292963296506968709,
	),
	theme_emoticon : '3qc8L5PoX16lgaEk',
	requests_pending : 20,
	recent_requesters : array(6309928040344563327),
	default_send_as : $client->peerUser(
		user_id : -5616706754544317251,
	),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 87,
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : 366876514603622627,
		),
		max_read_id : 13,
		stories : array(
			$client->storyItemDeleted(
				id : 17,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 80,
				date : 13,
				expire_date : 78,
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
				id : 14,
				date : 85,
				from_id : $client->peerUser(
					user_id : 1483319877509848120,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'cVt4elnjmXyS8JKY',
					story_id : 61,
				),
				expire_date : 74,
				caption : 'gHkQvzGs2mBxqlpU',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 84,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 36,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 19,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 28,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 44,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 85,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 65,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 3,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 23,
						language : 'mwNb4j5K7tpDLACz',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 19,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 10,
						user_id : -6770106101298369384,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 9,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 13,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 98,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 32,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 9,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 69,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 63,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 16,
						document_id : 6778051382057271653,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 48,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'rKpfOUeQqjJi4Hwv',
						address : 'DHoWR40zZ1Nravl7',
						provider : 'Ece2Ku7jvSrkifAm',
						venue_id : 'cxUkdFi8lvrVANCj',
						venue_type : 'BdGA2Vy8pj1TwXcb',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : 3324471190355704923,
						result_id : 'dFc3qSW6e7OgmREy',
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
						channel_id : 2087558832127106439,
						msg_id : 44,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 12,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'hX4eB8Di1MyJbQPE',
						temperature_c : -1621899.33984375,
						color : 4,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : '6DFSUmchHRjwI3Js',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(1269536407900698940),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(8346570368351966147),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(-5498329430620703634),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(-2208070299466071391),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 18,
					forwards_count : 59,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 87,
					recent_viewers : array(1282113428581431892),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(52),
			),
		),
	),
	wallpaper : $client->wallPaper(
		id : 5722756159003098688,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -544810152725204641,
		slug : '42DmlancfI0bhN6G',
		document : $client->documentEmpty(
			id : -2315637588934980698,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 15,
			second_background_color : 30,
			third_background_color : 57,
			fourth_background_color : 71,
			intensity : 72,
			rotation : 74,
			emoticon : 'gQjeISFbzw2KsrVi',
		),
	),
	boosts_applied : 11,
	boosts_unrestrict : 64,
	emojiset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 7,
		id : 5833651599030093754,
		access_hash : -2466424267604888041,
		title : 'jm2B1AyOQzrwSepZ',
		short_name : 'NtB5h8oGKE9v1Cmf',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'eUmpDJRjcQuw8x9I',
			),
			$client->photoSize(
				type : 'JuH7gpiVteATRdOf',
				w : 67,
				h : 64,
				size : 73,
			),
			$client->photoCachedSize(
				type : 'JgmvlMrdhOWwf23z',
				w : 95,
				h : 91,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'HgRDuWPj6N09oG3k',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'qbkIi2H1xXv5omPS',
				w : 56,
				h : 13,
				sizes : array(53),
			),
			$client->photoPathSize(
				type : 'SBQzCh6V8Mkgt7Nr',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 60,
		thumb_version : 23,
		thumb_document_id : -5833868778289409466,
		count : 38,
		hash : 0,
	),
	bot_verification : $client->botVerification(
		bot_id : -582626680039296041,
		icon : -918194740721057629,
		description : 'KZm0bVpg2zQTwcl1',
	),
	stargifts_count : 54,
	send_paid_messages_stars : 1685294627097450764,
	main_tab : $client->profileTabPosts(),
);
```