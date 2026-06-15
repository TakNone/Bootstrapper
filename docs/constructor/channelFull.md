# channelFull

**Description** : *Full info about a channel, supergroup or gigagroup*

**Layer** : 227

```tl
channelFull#a04e8d3a flags:# can_view_participants:flags.3?true can_set_username:flags.6?true can_set_stickers:flags.7?true hidden_prehistory:flags.10?true can_set_location:flags.16?true has_scheduled:flags.19?true can_view_stats:flags.20?true blocked:flags.22?true flags2:# can_delete_channel:flags2.0?true antispam:flags2.1?true participants_hidden:flags2.2?true translations_disabled:flags2.3?true stories_pinned_available:flags2.5?true view_forum_as_messages:flags2.6?true restricted_sponsored:flags2.11?true can_view_revenue:flags2.12?true paid_media_allowed:flags2.14?true can_view_stars_revenue:flags2.15?true paid_reactions_available:flags2.16?true stargifts_available:flags2.19?true paid_messages_available:flags2.20?true id:long about:string participants_count:flags.0?int admins_count:flags.1?int kicked_count:flags.2?int banned_count:flags.2?int online_count:flags.13?int read_inbox_max_id:int read_outbox_max_id:int unread_count:int chat_photo:Photo notify_settings:PeerNotifySettings exported_invite:flags.23?ExportedChatInvite bot_info:Vector<BotInfo> migrated_from_chat_id:flags.4?long migrated_from_max_id:flags.4?int pinned_msg_id:flags.5?int stickerset:flags.8?StickerSet available_min_id:flags.9?int folder_id:flags.11?int linked_chat_id:flags.14?long location:flags.15?ChannelLocation slowmode_seconds:flags.17?int slowmode_next_send_date:flags.18?int stats_dc:flags.12?int pts:int call:flags.21?InputGroupCall ttl_period:flags.24?int pending_suggestions:flags.25?Vector<string> groupcall_default_join_as:flags.26?Peer theme_emoticon:flags.27?string requests_pending:flags.28?int recent_requesters:flags.28?Vector<long> default_send_as:flags.29?Peer available_reactions:flags.30?ChatReactions reactions_limit:flags2.13?int stories:flags2.4?PeerStories wallpaper:flags2.7?WallPaper boosts_applied:flags2.8?int boosts_unrestrict:flags2.9?int emojiset:flags2.10?StickerSet bot_verification:flags2.17?BotVerification stargifts_count:flags2.18?int send_paid_messages_stars:flags2.21?long main_tab:flags2.22?ProfileTab guard_bot_id:flags2.23?long = ChatFull;
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
| **guard_bot_id** | [`flags2.23?long`](type/long) | NOTHING |

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
	id : 7924607474860300852,
	about : 'inA8jseK3x5cEdra',
	participants_count : 68,
	admins_count : 7,
	kicked_count : 32,
	banned_count : 75,
	online_count : 42,
	read_inbox_max_id : 29,
	read_outbox_max_id : 89,
	unread_count : 56,
	chat_photo : $client->photoEmpty(
		id : 8147372262641104112,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : true,
		mute_until : 10,
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
		link : 'Ya5lVnJSxTmoPdcZ',
		admin_id : 1890244825940825694,
		date : 19,
		start_date : 74,
		expire_date : 6,
		usage_limit : 24,
		usage : 71,
		requested : 3,
		subscription_expired : 100,
		title : 'XyAmMSICG58N4bJ2',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 61,
			amount : 3213455934762468998,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 3998943204370802336,
			description : '4FkoAf1XCiYwl3JZ',
			description_photo : $client->photoEmpty(
				id : -8863264637218651528,
			),
			description_document : $client->documentEmpty(
				id : 5754337424957553833,
			),
			commands : array(
				$client->botCommand(
					command : 'rX4tsQ7lpFChNK3Y',
					description : 'Wulah8enGI3VyH7E',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 9,
				background_dark_color : 26,
				header_color : 64,
				header_dark_color : 9,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : 6343695459123839267,
				company : 'YJ5Ruztdf6SXQerk',
				custom_description : 'SvHQ0wxFzAgV2MsJ',
			),
		),
	),
	migrated_from_chat_id : -5692918556962455926,
	migrated_from_max_id : 98,
	pinned_msg_id : 8,
	stickerset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 58,
		id : 8769685137745858487,
		access_hash : 314040761483210909,
		title : 'PUl90SaL7DMAhGIW',
		short_name : 'EQ0PVLn7KyI1bhYq',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'Bxi6DnhJmwOKZH3k',
			),
			$client->photoSize(
				type : 'w8QzFNn2foG3DLIH',
				w : 22,
				h : 71,
				size : 68,
			),
			$client->photoCachedSize(
				type : '5fawAdxVIyiOL1DY',
				w : 3,
				h : 32,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'JDkVM6c3AZbIHSqG',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'X12ygVqk7F4TzDhe',
				w : 96,
				h : 25,
				sizes : array(92),
			),
			$client->photoPathSize(
				type : 'ZyrCTMvAIidmkeNa',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 86,
		thumb_version : 75,
		thumb_document_id : 582037419484707383,
		count : 4,
		hash : 0,
	),
	available_min_id : 82,
	folder_id : 24,
	linked_chat_id : 4011717286611420947,
	location : $client->channelLocationEmpty(),
	slowmode_seconds : 95,
	slowmode_next_send_date : 20,
	stats_dc : 79,
	pts : 15,
	call : $client->inputGroupCall(
		id : -5811234074754339933,
		access_hash : 7043744906314405957,
	),
	ttl_period : 64,
	pending_suggestions : array('XLpVIAn1CqPKhGlN'),
	groupcall_default_join_as : $client->peerUser(
		user_id : -3153931488842471435,
	),
	theme_emoticon : 'ikxfIapBSKco0Xg9',
	requests_pending : 31,
	recent_requesters : array(5199917337317434324),
	default_send_as : $client->peerUser(
		user_id : -2761388835744773992,
	),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 0,
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : 352875241818542141,
		),
		max_read_id : 18,
		stories : array(
			$client->storyItemDeleted(
				id : 53,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 23,
				date : 29,
				expire_date : 73,
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
				id : 62,
				date : 48,
				from_id : $client->peerUser(
					user_id : 119291009754699449,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'JfnVStHW87Fl51wv',
					story_id : 81,
				),
				expire_date : 26,
				caption : '04fiKJcBFCHsM1oU',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 48,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 68,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 9,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 94,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 1,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 72,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 74,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 43,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 75,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 43,
						language : 'RvqrJx7P31YQK4EO',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 91,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 17,
						user_id : 3419807201131371438,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 60,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 51,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 91,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 27,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 63,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 91,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 13,
						document_id : 4391758774187241502,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 69,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 23,
						date : 58,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 62,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 26,
						old_text : 'TUsDJEGQW1ZOmFxb',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 1,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'bUReBmr4cQxJPiqj',
						address : 'CyA8lNjfDE9s5nW2',
						provider : 'dNsiB4E9M1WfjAaY',
						venue_id : 'SqwkE0WnrisIHTXt',
						venue_type : 'vTPR9E4axbHojSfy',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : -7132789421414537278,
						result_id : 'zw95yIjO6SFhL0vM',
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
						channel_id : -970204019265831773,
						msg_id : 97,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 72,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'uJVHbCqcL4i8nEgB',
						temperature_c : -1605785.736328125,
						color : 63,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'dShzIPelYksOw5rJ',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(-3015734208248600740),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(-5147145242595097143),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(3201852210716018968),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(8553105463534351977),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 25,
					forwards_count : 8,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 19,
					recent_viewers : array(5177419348097584525),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(76),
				music : $client->documentEmpty(
					id : 4281973377040492777,
				),
			),
		),
	),
	wallpaper : $client->wallPaper(
		id : 3962318546860680500,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -5184676269221013461,
		slug : 'D6mp4UJXE7I8eqPM',
		document : $client->documentEmpty(
			id : 677726729114915119,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 99,
			second_background_color : 63,
			third_background_color : 38,
			fourth_background_color : 91,
			intensity : 27,
			rotation : 73,
			emoticon : 'tGdO0gmuPpExnbCX',
		),
	),
	boosts_applied : 36,
	boosts_unrestrict : 50,
	emojiset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 36,
		id : 1222884318209827517,
		access_hash : -5757070034709214459,
		title : 'sODu74FwM8IxJqBh',
		short_name : 'T4iVyF5C3gZGfXpq',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'bZ5OyIaUH9ForRsd',
			),
			$client->photoSize(
				type : 'gQqIVP2tXWnj493u',
				w : 61,
				h : 33,
				size : 39,
			),
			$client->photoCachedSize(
				type : 'YmynacPJhb4Z7D0X',
				w : 78,
				h : 45,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'K9DUiBJrvn0NyCTR',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'rXTn6Ye8gUZmF5Qt',
				w : 38,
				h : 5,
				sizes : array(1),
			),
			$client->photoPathSize(
				type : 'j2G7CwqbNFlpWLtA',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 19,
		thumb_version : 58,
		thumb_document_id : -2145623843828457305,
		count : 84,
		hash : 0,
	),
	bot_verification : $client->botVerification(
		bot_id : -7505504414837498631,
		icon : 8104082035113651470,
		description : 'Bg630wjmihWFoaVT',
	),
	stargifts_count : 80,
	send_paid_messages_stars : -1822675277790583561,
	main_tab : $client->profileTabPosts(),
	guard_bot_id : -8385583667245695697,
);
```