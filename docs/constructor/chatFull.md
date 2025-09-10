# chatFull

**Description** : *Full info about a basic group*

**Layer** : 214

```tl
chatFull#2633421b flags:# can_set_username:flags.7?true has_scheduled:flags.8?true translations_disabled:flags.19?true id:long about:string participants:ChatParticipants chat_photo:flags.2?Photo notify_settings:PeerNotifySettings exported_invite:flags.13?ExportedChatInvite bot_info:flags.3?Vector<BotInfo> pinned_msg_id:flags.6?int folder_id:flags.11?int call:flags.12?InputGroupCall ttl_period:flags.14?int groupcall_default_join_as:flags.15?Peer theme_emoticon:flags.16?string requests_pending:flags.17?int recent_requesters:flags.17?Vector<long> available_reactions:flags.18?ChatReactions reactions_limit:flags.20?int = ChatFull;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_set_username** | [`flags.7?true`](type/true) | Can we change the username of this chat |
| **has_scheduled** | [`flags.8?true`](type/true) | Whether scheduled messages are available |
| **translations_disabled** | [`flags.19?true`](type/true) | Whether the real-time chat translation popup should be hidden |
| <mark>id</mark> | [`long`](type/long) | ID of the chat |
| <mark>about</mark> | [`string`](type/string) | About string for this chat |
| <mark>participants</mark> | [`ChatParticipants`](type/ChatParticipants) | Participant list |
| **chat_photo** | [`flags.2?Photo`](type/Photo) | Chat photo |
| <mark>notify_settings</mark> | [`PeerNotifySettings`](type/PeerNotifySettings) | Notification settings |
| **exported_invite** | [`flags.13?ExportedChatInvite`](type/ExportedChatInvite) | Chat invite |
| **bot_info** | [`flags.3?Vector<BotInfo>`](type/BotInfo) | Info about bots that are in this chat |
| **pinned_msg_id** | [`flags.6?int`](type/int) | Message ID of the last pinned message |
| **folder_id** | [`flags.11?int`](type/int) | Peer folder ID, for more info click here |
| **call** | [`flags.12?InputGroupCall`](type/InputGroupCall) | Group call information |
| **ttl_period** | [`flags.14?int`](type/int) | Time-To-Live of messages sent by the current user to this chat |
| **groupcall_default_join_as** | [`flags.15?Peer`](type/Peer) | When using phone.getGroupCallJoinAs to get a list of peers that can be used to join a group call, this field indicates the peer that should be selected by default |
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
	id : 7424976080473934986,
	about : 'wuM5ADB9YHcTmC6b',
	participants : $client->chatParticipantsForbidden(
		chat_id : 3989726770709239320,
		self_participant : $client->chatParticipant(
			user_id : 5351671470170168131,
			inviter_id : 5576312951467799927,
			date : 25,
		),
	),
	chat_photo : $client->photoEmpty(
		id : -4866953562220879756,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : false,
		mute_until : 7,
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
		link : 'kGXCEfvDnpPhOb74',
		admin_id : -844623888986220330,
		date : 50,
		start_date : 94,
		expire_date : 76,
		usage_limit : 64,
		usage : 76,
		requested : 94,
		subscription_expired : 20,
		title : 'Huw3IczBJ5SZ1qtW',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 51,
			amount : 8955673156308938857,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : -2361236438539822807,
			description : 'wu7oeOpZXM15krIH',
			description_photo : $client->photoEmpty(
				id : 8013559898133853799,
			),
			description_document : $client->documentEmpty(
				id : -1158085141196195441,
			),
			commands : array(
				$client->botCommand(
					command : 'v9gfjUh25mts3FAL',
					description : 'H3vQX6Jw9leOKk7z',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 77,
				background_dark_color : 11,
				header_color : 30,
				header_dark_color : 49,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -8385116199902999725,
				company : 'NEVhvBmQZOezoJnr',
				custom_description : 'ouIZTS2iVrlXNCeR',
			),
		),
	),
	pinned_msg_id : 99,
	folder_id : 94,
	call : $client->inputGroupCall(
		id : -8179557883563382459,
		access_hash : -9188489788167181979,
	),
	ttl_period : 17,
	groupcall_default_join_as : $client->peerUser(
		user_id : -2637805943280376818,
	),
	theme_emoticon : 'pJon9yRB2AHhqjlS',
	requests_pending : 83,
	recent_requesters : array(-3631398819334308024),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 6,
);
```