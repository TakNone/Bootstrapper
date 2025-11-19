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
	id : 1703399239339881187,
	about : 'NlrEWVXSMFZdPufv',
	participants_count : 1,
	admins_count : 94,
	kicked_count : 38,
	banned_count : 17,
	online_count : 56,
	read_inbox_max_id : 91,
	read_outbox_max_id : 100,
	unread_count : 75,
	chat_photo : $client->photoEmpty(
		id : 5328160516457740571,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : true,
		mute_until : 89,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : false,
		stories_hide_sender : true,
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
	exported_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'MSVH5YcUhZx28CPe',
		admin_id : 8133928148986774289,
		date : 92,
		start_date : 44,
		expire_date : 11,
		usage_limit : 91,
		usage : 0,
		requested : 40,
		subscription_expired : 95,
		title : 'QnoiGTJtwlA9aCWx',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 75,
			amount : 2475358787248586179,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 7550267583062897811,
			description : 'vckyrJEp1G9SIMPu',
			description_photo : $client->photoEmpty(
				id : 1648762268490785452,
			),
			description_document : $client->documentEmpty(
				id : -3525873853850217600,
			),
			commands : array(
				$client->botCommand(
					command : 'l70UqyW81pvnXuw6',
					description : 'Rc1SJm7Ofu4pETkP',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 9,
				background_dark_color : 16,
				header_color : 17,
				header_dark_color : 25,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : 1243294360229742541,
				company : 'NklqtcXJAFL6EwBH',
				custom_description : 'tW2PGTV5znbc7iev',
			),
		),
	),
	migrated_from_chat_id : 6494644457863188481,
	migrated_from_max_id : 11,
	pinned_msg_id : 13,
	stickerset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 53,
		id : -2016964454389715967,
		access_hash : -9154598115690750176,
		title : '3MIuaoLHgi408tQl',
		short_name : 'kefaHdxVp4vBYuFZ',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'Je7lUsgiaIYdA19p',
			),
			$client->photoSize(
				type : '8lZX5gksAvHTeyzn',
				w : 62,
				h : 49,
				size : 96,
			),
			$client->photoCachedSize(
				type : 'wnNeuXmEVRDPvqL6',
				w : 88,
				h : 69,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '7pb3SKU5hxQCnE2s',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'XkzudB4i1Q6SUFLg',
				w : 89,
				h : 77,
				sizes : array(19),
			),
			$client->photoPathSize(
				type : 'mAiYvFEIeyD3QHOU',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 51,
		thumb_version : 80,
		thumb_document_id : 3247074299717414145,
		count : 63,
		hash : 0,
	),
	available_min_id : 75,
	folder_id : 56,
	linked_chat_id : 343838585485948391,
	location : $client->channelLocationEmpty(),
	slowmode_seconds : 34,
	slowmode_next_send_date : 44,
	stats_dc : 28,
	pts : 38,
	call : $client->inputGroupCall(
		id : 6773400383603369263,
		access_hash : 1148464470495377116,
	),
	ttl_period : 44,
	pending_suggestions : array('c93W2RgtIKuHmSFL'),
	groupcall_default_join_as : $client->peerUser(
		user_id : 8835409786683514877,
	),
	theme_emoticon : 'I9c07FRQMrE1nXWS',
	requests_pending : 14,
	recent_requesters : array(-3840846674866064353),
	default_send_as : $client->peerUser(
		user_id : -4024363127053936982,
	),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 75,
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : -5968759828305038927,
		),
		max_read_id : 71,
		stories : array(
			$client->storyItemDeleted(
				id : 45,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 95,
				date : 61,
				expire_date : 89,
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
				id : 40,
				date : 59,
				from_id : $client->peerUser(
					user_id : -1600334082331141009,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'tLvPxcikMdU7gSBz',
					story_id : 16,
				),
				expire_date : 5,
				caption : '9xoiupyb7AvSHf6P',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 40,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 38,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 1,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 57,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 84,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 91,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 49,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 12,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 3,
						language : 'AylqzYMWFQD9jn8P',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 76,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 53,
						user_id : -483960609299703113,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 77,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 33,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 55,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 74,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 85,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 63,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 38,
						document_id : -6207506161328877666,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 14,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'Ykzsao5CAPw3MqET',
						address : 'ztkPi6jT4A531d8Q',
						provider : 'qagDuYjIdA1VF5ic',
						venue_id : 'CBDgtSbVYGd1ze6K',
						venue_type : '4TsADvKpXPCwq7j1',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : 2581985903771582050,
						result_id : '0M6UNorIS1CPVAfl',
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
						channel_id : 3930960676828580480,
						msg_id : 2,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(peer : '@LiveProto'),
						msg_id : 76,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'Wm0DhErod4vpSCI3',
						temperature_c : 469954.287109375,
						color : 91,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : '7Jtl9S0g1iw3IZXj',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(-1196677736776406485),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(-8407013791053341543),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(1646680797217855520),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(-147935272551435636),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 0,
					forwards_count : 72,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 36,
					recent_viewers : array(-8318676618679672391),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(31),
			),
		),
	),
	wallpaper : $client->wallPaper(
		id : 2712187786894157204,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 6858665166164872743,
		slug : 'v0Eti5g1uwTSKY6B',
		document : $client->documentEmpty(
			id : 2893145231671627213,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 47,
			second_background_color : 33,
			third_background_color : 64,
			fourth_background_color : 93,
			intensity : 55,
			rotation : 96,
			emoticon : 'Ix1GaFSe4Er7BNXT',
		),
	),
	boosts_applied : 59,
	boosts_unrestrict : 1,
	emojiset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 58,
		id : 7037846631232752410,
		access_hash : -8371926695107872149,
		title : 'cjwYaJEyfg3pNbUl',
		short_name : 'u9rLeRYq6isdn4FW',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'vwguNlXK8QhxCDGi',
			),
			$client->photoSize(
				type : 'BqyLhkvuGnCaDUfd',
				w : 76,
				h : 57,
				size : 85,
			),
			$client->photoCachedSize(
				type : 'mKDRf8hnPHToaV4O',
				w : 97,
				h : 17,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'dHNPuf4IznrV3Wvq',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'EchnJ29Q0AzkRUBI',
				w : 17,
				h : 75,
				sizes : array(55),
			),
			$client->photoPathSize(
				type : 'eQOBs0MhNoj2CTc8',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 86,
		thumb_version : 95,
		thumb_document_id : -1763692770927661128,
		count : 9,
		hash : 0,
	),
	bot_verification : $client->botVerification(
		bot_id : -8396213765774151257,
		icon : 3351340859886713238,
		description : 'EGsdchVY8UzqMkDH',
	),
	stargifts_count : 4,
	send_paid_messages_stars : -6887355292147988661,
	main_tab : $client->profileTabPosts(),
);
```