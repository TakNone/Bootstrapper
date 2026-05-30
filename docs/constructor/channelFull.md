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
	id : 5828196258066849577,
	about : '7AyikfjwtXIP9drh',
	participants_count : 74,
	admins_count : 77,
	kicked_count : 54,
	banned_count : 98,
	online_count : 43,
	read_inbox_max_id : 32,
	read_outbox_max_id : 63,
	unread_count : 75,
	chat_photo : $client->photoEmpty(
		id : -5599234705590533258,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : true,
		mute_until : 85,
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
		link : '8vFXI2HZKwnoqf1x',
		admin_id : 2417510055351781209,
		date : 46,
		start_date : 34,
		expire_date : 45,
		usage_limit : 40,
		usage : 49,
		requested : 37,
		subscription_expired : 97,
		title : 'dQjG8tBKuUZiylxm',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 25,
			amount : 6393485774656090086,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : -7610957477285769084,
			description : 'Z0NtAyrnVXaquhjC',
			description_photo : $client->photoEmpty(
				id : 1645591426950320118,
			),
			description_document : $client->documentEmpty(
				id : 7881731923017416840,
			),
			commands : array(
				$client->botCommand(
					command : 'u4hgtDEF5NI2WpRl',
					description : 'R3G9pTqngXwJjczW',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 92,
				background_dark_color : 44,
				header_color : 54,
				header_dark_color : 40,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -6637102305387376826,
				company : 'lRV6dkXNQpfG1oe5',
				custom_description : '37cCrZaqouSwQypX',
			),
		),
	),
	migrated_from_chat_id : 5406621724190944210,
	migrated_from_max_id : 0,
	pinned_msg_id : 27,
	stickerset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 16,
		id : -5054873135885884539,
		access_hash : -3651532871589776296,
		title : 'icM4emWFGNdxhwB8',
		short_name : 'HV2Z9zvEl6mejK8g',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '46daAB0vwRGYrZuN',
			),
			$client->photoSize(
				type : 'oYCdt9IOxR3zrB4q',
				w : 18,
				h : 10,
				size : 37,
			),
			$client->photoCachedSize(
				type : 'VFCekYsPEZoBdqmw',
				w : 88,
				h : 8,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '0uD4iOwYlaRkGvPz',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'VHqQByxaUWGZo6cD',
				w : 61,
				h : 46,
				sizes : array(70),
			),
			$client->photoPathSize(
				type : 'rIVkBqfW2MeQjEFo',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 50,
		thumb_version : 12,
		thumb_document_id : 7374816056364767539,
		count : 4,
		hash : 0,
	),
	available_min_id : 98,
	folder_id : 100,
	linked_chat_id : 2011008541160871164,
	location : $client->channelLocationEmpty(),
	slowmode_seconds : 14,
	slowmode_next_send_date : 86,
	stats_dc : 25,
	pts : 45,
	call : $client->inputGroupCall(
		id : 8448647061472213528,
		access_hash : -1675361235746043679,
	),
	ttl_period : 99,
	pending_suggestions : array('MI3OwGYK7EuLCeSl'),
	groupcall_default_join_as : $client->peerUser(
		user_id : -1974736866226808276,
	),
	theme_emoticon : 'jwXzVMhRBEoNplix',
	requests_pending : 61,
	recent_requesters : array(-2207729600371953696),
	default_send_as : $client->peerUser(
		user_id : -6106261925810536127,
	),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 77,
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : 1678553650848849608,
		),
		max_read_id : 76,
		stories : array(
			$client->storyItemDeleted(
				id : 89,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 14,
				date : 60,
				expire_date : 41,
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
				id : 60,
				date : 84,
				from_id : $client->peerUser(
					user_id : -1840798001266038887,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'dZaqEDwGWzSm4lf0',
					story_id : 24,
				),
				expire_date : 39,
				caption : '0DQwFJPtky35s8VR',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 42,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 15,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 31,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 34,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 77,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 69,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 59,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 0,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 78,
						language : 'FdrmU4Kz95gvjQGn',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 80,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 82,
						user_id : 2954552396660465887,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 1,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 63,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 72,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 74,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 7,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 6,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 65,
						document_id : -3113688922513538756,
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
						title : 'I9jUEJlSFMf483mi',
						address : 'NMkUGTAlje46hPJB',
						provider : '8qXaglhv5drf2JLA',
						venue_id : '4fOy0GEAUgsD3JYW',
						venue_type : 'eryZK7bxjHdVMGak',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : -1039890213026544596,
						result_id : 'PIf0U8qJRib476gw',
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
						channel_id : -2197174090911960469,
						msg_id : 98,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 36,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'PLCZaDfXhNkepbAQ',
						temperature_c : 300304.037109375,
						color : 33,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'alnXxwz236csfSGT',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(8560907546416717798),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(4038854431755498955),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(3415089572113872999),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(7318989672797543909),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 81,
					forwards_count : 46,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 21,
					recent_viewers : array(-1733526407424068440),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(24),
			),
		),
	),
	wallpaper : $client->wallPaper(
		id : 3560881560545556073,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -3427965689316948955,
		slug : 'BoPNWemQdcFXJYGb',
		document : $client->documentEmpty(
			id : 8927782517737045292,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 31,
			second_background_color : 28,
			third_background_color : 85,
			fourth_background_color : 61,
			intensity : 47,
			rotation : 85,
			emoticon : 'khDQgFYKSonquPi3',
		),
	),
	boosts_applied : 26,
	boosts_unrestrict : 34,
	emojiset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 62,
		id : 1951575877155275615,
		access_hash : -7429874759815368560,
		title : 'xKUzWPu4aRZrv1fI',
		short_name : 'dXgkjbNq3Fn1R6ST',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '14TDAQXyCHsBVIZW',
			),
			$client->photoSize(
				type : 'RkY8dlPsDonaipJ6',
				w : 59,
				h : 24,
				size : 53,
			),
			$client->photoCachedSize(
				type : 'ZQwWBboILF8T1flO',
				w : 33,
				h : 82,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'O8Sn07J6fKQRa5PM',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'AJ3gO2C90GUmsLcW',
				w : 25,
				h : 59,
				sizes : array(11),
			),
			$client->photoPathSize(
				type : 'ESuf6IvLmRYyelsJ',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 14,
		thumb_version : 54,
		thumb_document_id : 4399195623606854286,
		count : 3,
		hash : 0,
	),
	bot_verification : $client->botVerification(
		bot_id : 693212753740663316,
		icon : -115222863255700588,
		description : 'cR1p7LO2vyFY3r8i',
	),
	stargifts_count : 80,
	send_paid_messages_stars : -8688927228893536860,
	main_tab : $client->profileTabPosts(),
);
```