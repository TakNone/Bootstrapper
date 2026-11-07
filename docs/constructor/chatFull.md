# chatFull

**Description** : *Full info about a basic group*

**Layer** : 233

```tl
chatFull#2633421b flags:# can_set_username:flags.7?true has_scheduled:flags.8?true translations_disabled:flags.19?true has_welcome_messages:flags.21?true id:long about:string participants:ChatParticipants chat_photo:flags.2?Photo notify_settings:PeerNotifySettings exported_invite:flags.13?ExportedChatInvite bot_info:flags.3?Vector<BotInfo> pinned_msg_id:flags.6?int folder_id:flags.11?int call:flags.12?InputGroupCall ttl_period:flags.14?int groupcall_default_join_as:flags.15?Peer theme_emoticon:flags.16?string requests_pending:flags.17?int recent_requesters:flags.17?Vector<long> available_reactions:flags.18?ChatReactions reactions_limit:flags.20?int = ChatFull;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_set_username** | [`flags.7?true`](type/true) | Can we change the username of this chat |
| **has_scheduled** | [`flags.8?true`](type/true) | Whether scheduled messages are available |
| **translations_disabled** | [`flags.19?true`](type/true) | Whether the real-time chat translation popup should be hidden |
| **has_welcome_messages** | [`flags.21?true`](type/true) | NOTHING |
| <mark>id</mark> | [`long`](type/long) | ID of the chat |
| <mark>about</mark> | [`string`](type/string) | About string for this chat |
| <mark>participants</mark> | [`ChatParticipants`](type/ChatParticipants) | Participant list |
| **chat_photo** | [`flags.2?Photo`](type/Photo) | Chat photo |
| <mark>notify_settings</mark> | [`PeerNotifySettings`](type/PeerNotifySettings) | Notification settings |
| **exported_invite** | [`flags.13?ExportedChatInvite`](type/ExportedChatInvite) | Chat invite |
| **bot_info** | [`flags.3?Vector<BotInfo>`](type/BotInfo) | Info about bots that are in this chat |
| **pinned_msg_id** | [`flags.6?int`](type/int) | Message ID of the last pinned message |
| **folder_id** | [`flags.11?int`](type/int) | Peer folder ID, for more info click here |
| **call** | [`flags.12?InputGroupCall`](type/InputGroupCall) | Active or scheduled video chat » associated with this basic group |
| **ttl_period** | [`flags.14?int`](type/int) | Time-To-Live of messages sent by the current user to this chat |
| **groupcall_default_join_as** | [`flags.15?Peer`](type/Peer) | Explicitly saved default peer used to join this group's video chat »; if absent, the current user is used |
| **theme_emoticon** | [`flags.16?string`](type/string) | Emoji representing a specific chat theme |
| **requests_pending** | [`flags.17?int`](type/int) | Pending join requests » |
| **recent_requesters** | [`flags.17?Vector<long>`](type/long) | IDs of users who requested to join recently |
| **available_reactions** | [`flags.18?ChatReactions`](type/ChatReactions) | Allowed message reactions » |
| **reactions_limit** | [`flags.20?int`](type/int) | This flag may be used to impose a custom limit of unique reactions (i.e. a customizable version of appConfig.reactions_uniq_max) |

---

## Type

[ChatFull](type/ChatFull)

---

## Example

```php
$chatFull = $client->chatFull(
	can_set_username : true,
	has_scheduled : true,
	translations_disabled : true,
	has_welcome_messages : true,
	id : 5880490061799155789,
	about : 'D6VH9nW5wX7YZetq',
	participants : $client->chatParticipantsForbidden(
		chat_id : 1198169969543837028,
		self_participant : $client->chatParticipant(
			user_id : 6671340949667763961,
			inviter_id : 3232510337327211662,
			date : 39,
			rank : 'RZMrusFwJcASQ6tW',
		),
	),
	chat_photo : $client->photoEmpty(
		id : 1808848466991503124,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : true,
		mute_until : 74,
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
		link : 'c6uYRQh9I15DoeqV',
		admin_id : -8559629779487773005,
		date : 64,
		start_date : 40,
		expire_date : 70,
		usage_limit : 26,
		usage : 1,
		requested : 75,
		subscription_expired : 31,
		title : 'UQw3di4vIk7YzK6n',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 22,
			amount : 3769235232882957303,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : -2434595539436528916,
			description : 'yXCax5YBwtdNIi2g',
			description_photo : $client->photoEmpty(
				id : -9061400712671592016,
			),
			description_document : $client->documentEmpty(
				id : 5621377028022489713,
			),
			commands : array(
				$client->botCommand(
					ephemeral : true,
					command : 'sej0SAdbNI9zrMPc',
					description : 'BeYPCEgUA54z0lNW',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 67,
				background_dark_color : 99,
				header_color : 22,
				header_dark_color : 65,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : 5354073172799786224,
				company : 'N1uGsSjWo03er4Ow',
				custom_description : $client->textWithEntities(
					text : 'mVyOkp9dKET7QrZ2',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
						$client->messageEntityTonAddress(...),
					),
				),
			),
		),
	),
	pinned_msg_id : 48,
	folder_id : 82,
	call : $client->inputGroupCall(
		id : -7810155266197986448,
		access_hash : 7831648847866046459,
	),
	ttl_period : 25,
	groupcall_default_join_as : $client->peerUser(
		user_id : -5816935772694525610,
	),
	theme_emoticon : 'clLWUzgDeTnvGRru',
	requests_pending : 20,
	recent_requesters : array(-1697581660716319639),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 100,
);
```