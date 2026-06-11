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
	id : -7615393788670834554,
	about : 'CNSxX6iVHBYOPGsg',
	participants_count : 70,
	admins_count : 83,
	kicked_count : 77,
	banned_count : 75,
	online_count : 86,
	read_inbox_max_id : 62,
	read_outbox_max_id : 46,
	unread_count : 82,
	chat_photo : $client->photoEmpty(
		id : 3324788107243384745,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : false,
		mute_until : 52,
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
		link : 'ZCQ8V2WtBAdbJ0sL',
		admin_id : -4411438306634843359,
		date : 67,
		start_date : 89,
		expire_date : 50,
		usage_limit : 45,
		usage : 55,
		requested : 58,
		subscription_expired : 20,
		title : 'iCDux46NFq0k9MSt',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 19,
			amount : -4443921073643468503,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : -5422652544449814842,
			description : 'beUpGQyxMHRf4XY8',
			description_photo : $client->photoEmpty(
				id : 8204073835548097096,
			),
			description_document : $client->documentEmpty(
				id : 9200152456792773961,
			),
			commands : array(
				$client->botCommand(
					command : 'sHb0vL3OwxMz47d5',
					description : 'NZQPB270zvTjGWhA',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 66,
				background_dark_color : 58,
				header_color : 13,
				header_dark_color : 27,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -1510019589010910334,
				company : 'L0TwjAMB2pihtf3P',
				custom_description : '4MQYN5fBFacDgKU2',
			),
		),
	),
	migrated_from_chat_id : 5918950490660592169,
	migrated_from_max_id : 0,
	pinned_msg_id : 49,
	stickerset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 34,
		id : -6726914544783564860,
		access_hash : 5571324136257464040,
		title : 'Dg1uGLRUwCSTN59M',
		short_name : '6sbAMdraIGZ2jmEv',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'oML5yKxjQpBrtlbF',
			),
			$client->photoSize(
				type : 'KnR6qINxJGlWPLCH',
				w : 91,
				h : 10,
				size : 43,
			),
			$client->photoCachedSize(
				type : 'JMHaQwDAuBtp6z4P',
				w : 70,
				h : 42,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'VAfwWY4npdUZLK65',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'HxaS9N0bcnCfjzv1',
				w : 79,
				h : 44,
				sizes : array(64),
			),
			$client->photoPathSize(
				type : '17KvLIAuVsapNYf6',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 41,
		thumb_version : 94,
		thumb_document_id : 5151995507080559331,
		count : 40,
		hash : 0,
	),
	available_min_id : 75,
	folder_id : 54,
	linked_chat_id : 8804127175567567640,
	location : $client->channelLocationEmpty(),
	slowmode_seconds : 96,
	slowmode_next_send_date : 96,
	stats_dc : 39,
	pts : 39,
	call : $client->inputGroupCall(
		id : 1353267361986325267,
		access_hash : -7534097421655503250,
	),
	ttl_period : 22,
	pending_suggestions : array('StNcCiLRxOeIj5rp'),
	groupcall_default_join_as : $client->peerUser(
		user_id : 6193839872311981372,
	),
	theme_emoticon : 'xekZyjKPOBLi4H6z',
	requests_pending : 45,
	recent_requesters : array(-3078014387246642959),
	default_send_as : $client->peerUser(
		user_id : 8364588982361587935,
	),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 53,
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : 2480197228037039967,
		),
		max_read_id : 38,
		stories : array(
			$client->storyItemDeleted(
				id : 70,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 82,
				date : 55,
				expire_date : 8,
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
				id : 42,
				date : 6,
				from_id : $client->peerUser(
					user_id : 7566971838980373061,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'qbiCI891t0lAvKmN',
					story_id : 70,
				),
				expire_date : 93,
				caption : 'JCBK8yQDGVrTguiA',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 43,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 29,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 6,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 54,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 56,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 99,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 5,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 99,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 38,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 91,
						language : '9k4FoOd15IuMJgPQ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 53,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 71,
						user_id : 5790066269058799536,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 0,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 30,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 19,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 70,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 46,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 65,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 26,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 25,
						document_id : -3120998352426800699,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 20,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 65,
						date : 72,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 86,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 45,
						old_text : 'lhsX2cEapFGT1PMW',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 4,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : '7algGWSUZ8fQ5KJ0',
						address : 'eTljqE5ad0g4fskN',
						provider : 'Sobx4FHQwGRyrUW9',
						venue_id : 's9z3neEd7MRuBQK1',
						venue_type : '4ZdT5HQVC09kzeRi',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : 8045384232169232316,
						result_id : '3tkGeAmzYUCSgPbK',
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
						channel_id : -2945160621125069315,
						msg_id : 13,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 96,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'dQXptcrI3HbolUxi',
						temperature_c : -1637008.4052734375,
						color : 44,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'ODBAT6kjrHbghEQK',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(-276406210638525043),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(-7636704591891954590),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(-7273673095040922532),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(8394412919046674425),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 59,
					forwards_count : 29,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 44,
					recent_viewers : array(-140764136855991210),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(14),
				music : $client->documentEmpty(
					id : 2223538634160233893,
				),
			),
		),
	),
	wallpaper : $client->wallPaper(
		id : 3792312811625084892,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -3563208796058679207,
		slug : '3QqCphAr2jmVyt7s',
		document : $client->documentEmpty(
			id : 8439307696948123425,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 53,
			second_background_color : 11,
			third_background_color : 53,
			fourth_background_color : 13,
			intensity : 4,
			rotation : 32,
			emoticon : 'UbnP3Yp5tjLizmkQ',
		),
	),
	boosts_applied : 18,
	boosts_unrestrict : 5,
	emojiset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 10,
		id : 5870514285710842223,
		access_hash : 8333656877513602540,
		title : 'Ojt5pQIs6cZek1hg',
		short_name : 'CQ350EVu2kzFZY97',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'bgKXqwczo7a3vhx2',
			),
			$client->photoSize(
				type : 'h3NkD7rPaJqs0QLT',
				w : 64,
				h : 80,
				size : 39,
			),
			$client->photoCachedSize(
				type : '4GEusHzwKVQ96Dxl',
				w : 34,
				h : 95,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'MfxStmq01TP47HsJ',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'wEPABzoG92R8lCSk',
				w : 6,
				h : 29,
				sizes : array(73),
			),
			$client->photoPathSize(
				type : 'N9mQ80AajMbpBUXI',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 15,
		thumb_version : 19,
		thumb_document_id : 4981121656432810753,
		count : 40,
		hash : 0,
	),
	bot_verification : $client->botVerification(
		bot_id : 4370257404180198117,
		icon : 1232771712556197881,
		description : 'OBpa0mPkiAoQYvHT',
	),
	stargifts_count : 47,
	send_paid_messages_stars : 7642350546412821952,
	main_tab : $client->profileTabPosts(),
	guard_bot_id : -5636493783321928640,
);
```