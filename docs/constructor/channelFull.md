# channelFull

**Description** : *Full info about a channel, supergroup or gigagroup*

**Layer** : 229

```tl
channelFull#a04e8d3a flags:# can_view_participants:flags.3?true can_set_username:flags.6?true can_set_stickers:flags.7?true hidden_prehistory:flags.10?true can_set_location:flags.16?true has_scheduled:flags.19?true can_view_stats:flags.20?true blocked:flags.22?true flags2:# can_delete_channel:flags2.0?true antispam:flags2.1?true participants_hidden:flags2.2?true translations_disabled:flags2.3?true stories_pinned_available:flags2.5?true view_forum_as_messages:flags2.6?true restricted_sponsored:flags2.11?true can_view_revenue:flags2.12?true paid_media_allowed:flags2.14?true can_view_stars_revenue:flags2.15?true paid_reactions_available:flags2.16?true stargifts_available:flags2.19?true paid_messages_available:flags2.20?true has_welcome_messages:flags2.24?true id:long about:string participants_count:flags.0?int admins_count:flags.1?int kicked_count:flags.2?int banned_count:flags.2?int online_count:flags.13?int read_inbox_max_id:int read_outbox_max_id:int unread_count:int chat_photo:Photo notify_settings:PeerNotifySettings exported_invite:flags.23?ExportedChatInvite bot_info:Vector<BotInfo> migrated_from_chat_id:flags.4?long migrated_from_max_id:flags.4?int pinned_msg_id:flags.5?int stickerset:flags.8?StickerSet available_min_id:flags.9?int folder_id:flags.11?int linked_chat_id:flags.14?long location:flags.15?ChannelLocation slowmode_seconds:flags.17?int slowmode_next_send_date:flags.18?int stats_dc:flags.12?int pts:int call:flags.21?InputGroupCall ttl_period:flags.24?int pending_suggestions:flags.25?Vector<string> groupcall_default_join_as:flags.26?Peer theme_emoticon:flags.27?string requests_pending:flags.28?int recent_requesters:flags.28?Vector<long> default_send_as:flags.29?Peer available_reactions:flags.30?ChatReactions reactions_limit:flags2.13?int stories:flags2.4?PeerStories wallpaper:flags2.7?WallPaper boosts_applied:flags2.8?int boosts_unrestrict:flags2.9?int emojiset:flags2.10?StickerSet bot_verification:flags2.17?BotVerification stargifts_count:flags2.18?int send_paid_messages_stars:flags2.21?long main_tab:flags2.22?ProfileTab guard_bot_id:flags2.23?long = ChatFull;
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
| **blocked** | [`flags.22?true`](type/true) | Whether any anonymous admin of this supergroup was blocked: if set, you won't receive messages from anonymous group admins » in discussion replies via @replies |
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
| **has_welcome_messages** | [`flags2.24?true`](type/true) | NOTHING |
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
| **call** | [`flags.21?InputGroupCall`](type/InputGroupCall) | Active or scheduled video chat/livestream » associated with this supergroup/channel |
| **ttl_period** | [`flags.24?int`](type/int) | Time-To-Live of messages in this channel or supergroup |
| **pending_suggestions** | [`flags.25?Vector<string>`](type/string) | A list of suggested actions for the supergroup admin, see here for more info » |
| **groupcall_default_join_as** | [`flags.26?Peer`](type/Peer) | Explicitly saved default peer used to join this supergroup/channel's video chat/livestream »; if absent, the current user is used |
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
	has_welcome_messages : true,
	id : -6497788817090107599,
	about : 'VefidkWchOBRby53',
	participants_count : 17,
	admins_count : 55,
	kicked_count : 94,
	banned_count : 93,
	online_count : 100,
	read_inbox_max_id : 82,
	read_outbox_max_id : 85,
	unread_count : 43,
	chat_photo : $client->photoEmpty(
		id : 3258838248242689618,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : false,
		mute_until : 87,
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
		link : 'DWo9ui8bqJHpgK5Q',
		admin_id : 8925289276694688814,
		date : 0,
		start_date : 2,
		expire_date : 98,
		usage_limit : 86,
		usage : 5,
		requested : 2,
		subscription_expired : 94,
		title : 'TU4YPd9Mil0nJeEm',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 47,
			amount : 5184213987822085958,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : -6829186268530361368,
			description : 'JcUgjEimBOZLbQDk',
			description_photo : $client->photoEmpty(
				id : 7679042106083775111,
			),
			description_document : $client->documentEmpty(
				id : -640697551243402174,
			),
			commands : array(
				$client->botCommand(
					ephemeral : true,
					command : 'fcIg0RYveu8qwGtZ',
					description : '5YpwCJztHSKbivRE',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 71,
				background_dark_color : 86,
				header_color : 26,
				header_dark_color : 59,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -1370282801923142436,
				company : 'YSRMCZ0iVfJNaerz',
				custom_description : '0xGTRFE4j2l3tqLr',
			),
		),
	),
	migrated_from_chat_id : 7867797593291040875,
	migrated_from_max_id : 94,
	pinned_msg_id : 95,
	stickerset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 19,
		id : 3314276096326854226,
		access_hash : 950028053058195584,
		title : 'VvpO0Qhgf84rYjKW',
		short_name : 'tKyn6QIws7cRSEom',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'ahtMlVb6QOspR2Pw',
			),
			$client->photoSize(
				type : 'b1cfNMLoenV3SQAB',
				w : 44,
				h : 9,
				size : 85,
			),
			$client->photoCachedSize(
				type : 'Q2UzsC3JygibwjYW',
				w : 63,
				h : 43,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'JFG7OEtZLRw43ecT',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'hTxAuIQc17GqvnXC',
				w : 92,
				h : 89,
				sizes : array(10),
			),
			$client->photoPathSize(
				type : 'cifKMWgqaELbzpex',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 94,
		thumb_version : 84,
		thumb_document_id : 722934314908882918,
		count : 94,
		hash : 0,
	),
	available_min_id : 83,
	folder_id : 60,
	linked_chat_id : -1103885221062436407,
	location : $client->channelLocationEmpty(),
	slowmode_seconds : 20,
	slowmode_next_send_date : 65,
	stats_dc : 22,
	pts : 26,
	call : $client->inputGroupCall(
		id : -6360416896957527222,
		access_hash : 4538845392276821804,
	),
	ttl_period : 19,
	pending_suggestions : array('dDbTUsF7f9yPxh8M'),
	groupcall_default_join_as : $client->peerUser(
		user_id : 7647376286870058685,
	),
	theme_emoticon : 'QLIt7VMz2Oj8gYDJ',
	requests_pending : 91,
	recent_requesters : array(3798888424912217565),
	default_send_as : $client->peerUser(
		user_id : 1658767454905121979,
	),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 56,
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : 6528445606716630056,
		),
		max_read_id : 71,
		stories : array(
			$client->storyItemDeleted(
				id : 4,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 98,
				date : 19,
				expire_date : 46,
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
				id : 78,
				date : 59,
				from_id : $client->peerUser(
					user_id : 138687473401483753,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'jmItebTXKv0l6DYn',
					story_id : 10,
				),
				expire_date : 38,
				caption : '4m8FUCoOPXZcNKfM',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 57,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 45,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 70,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 23,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 27,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 77,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 19,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 9,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 75,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 8,
						language : 'd5QK6JE1B7Ioe4VH',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 80,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 4,
						user_id : 5341913081059330246,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 5,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 84,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 47,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 75,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 25,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 24,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 15,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 92,
						document_id : -3539761441464505918,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 37,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 12,
						date : 70,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 39,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 97,
						old_text : 'PlQ6MaD0jpIqbAK7',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 8,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'BYHid1jTo5FMntPc',
						address : 'MOU7WILVpZtYkfAl',
						provider : 'clXdnMG2hW1NZUA7',
						venue_id : '9dhl31BQzftnw6Jy',
						venue_type : 'kMQGCNA0q1FzSsf6',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : -1204496492923767167,
						result_id : '7TdcZtbX3vDhlUAQ',
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
						channel_id : 1334677939795741635,
						msg_id : 60,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 66,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : '2jYAoz14hmByxlCG',
						temperature_c : -785862.388671875,
						color : 50,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'WbH3IsoCpXdaJvhf',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(6864783918024199771),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(5369921609283625589),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(-2318902888409345877),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(6471198159941652111),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 42,
					forwards_count : 76,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 29,
					recent_viewers : array(-5749195409418013119),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(83),
				music : $client->documentEmpty(
					id : -5913469359397970061,
				),
			),
		),
	),
	wallpaper : $client->wallPaper(
		id : 1419315551492912656,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -8403424398093965677,
		slug : '4zNpgeRhiS8XtJYy',
		document : $client->documentEmpty(
			id : -7657159133165638394,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 26,
			second_background_color : 99,
			third_background_color : 77,
			fourth_background_color : 52,
			intensity : 72,
			rotation : 76,
			emoticon : '0XChMO37ab4NtDjp',
		),
	),
	boosts_applied : 35,
	boosts_unrestrict : 31,
	emojiset : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 29,
		id : 9012193057047748427,
		access_hash : -3907038167901116477,
		title : 'xz0NOJBgIhRE9lV8',
		short_name : 'WTCFpf6RvOqoNzw1',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'fRi93znw1MeS0BVk',
			),
			$client->photoSize(
				type : '4dtpErYZLV53HKih',
				w : 88,
				h : 33,
				size : 79,
			),
			$client->photoCachedSize(
				type : 'PzfGr0TAneHEZuYo',
				w : 46,
				h : 36,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'NevMHquSTGgf0Y2B',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'Heb3jsuVlCNhpn9B',
				w : 26,
				h : 47,
				sizes : array(34),
			),
			$client->photoPathSize(
				type : '67ZSL5Jv10PpW3Oq',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 55,
		thumb_version : 50,
		thumb_document_id : 6313916229511043379,
		count : 39,
		hash : 0,
	),
	bot_verification : $client->botVerification(
		bot_id : -4502966587538742577,
		icon : 8092580473587320684,
		description : 'tkrxFj6A8h0lgPcE',
	),
	stargifts_count : 88,
	send_paid_messages_stars : -2049505948109117359,
	main_tab : $client->profileTabPosts(),
	guard_bot_id : 1323917756537886884,
);
```