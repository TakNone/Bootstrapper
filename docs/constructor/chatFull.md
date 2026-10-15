# chatFull

**Description** : *Full info about a basic group*

**Layer** : 229

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
	id : -599965732656175029,
	about : '8i0m2R39Q5YkMghP',
	participants : $client->chatParticipantsForbidden(
		chat_id : 5534295276958411541,
		self_participant : $client->chatParticipant(
			user_id : -5664850066468371809,
			inviter_id : -1123058360539825707,
			date : 94,
			rank : 'KyL6v4WMkPVRqU7d',
		),
	),
	chat_photo : $client->photoEmpty(
		id : 4935272750177009769,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : false,
		mute_until : 78,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : true,
		stories_hide_sender : false,
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
	exported_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'BhRxaMnLkf13TZz7',
		admin_id : -7347170243206116420,
		date : 20,
		start_date : 46,
		expire_date : 74,
		usage_limit : 84,
		usage : 32,
		requested : 63,
		subscription_expired : 71,
		title : '6qgliDNAdLoarZeQ',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 84,
			amount : -710430163541560605,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 3666207441190403946,
			description : '2Lre0pmhA8E7FJSb',
			description_photo : $client->photoEmpty(
				id : -6831273697131231532,
			),
			description_document : $client->documentEmpty(
				id : -4898621442215859302,
			),
			commands : array(
				$client->botCommand(
					ephemeral : true,
					command : '37I1heKBtLj4FJna',
					description : 'IEfAYj62yxgnamwd',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 0,
				background_dark_color : 70,
				header_color : 18,
				header_dark_color : 22,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : 639963584584510180,
				company : '8uCq1Zs7Uf9hxitB',
				custom_description : 'Uy5wWLgbOFXRqCDs',
			),
		),
	),
	pinned_msg_id : 51,
	folder_id : 36,
	call : $client->inputGroupCall(
		id : 1179309086462697143,
		access_hash : 1696808021505208547,
	),
	ttl_period : 82,
	groupcall_default_join_as : $client->peerUser(
		user_id : 8355628305055336998,
	),
	theme_emoticon : 'OK91fUrven8CcENY',
	requests_pending : 49,
	recent_requesters : array(-6263949773458938816),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 38,
);
```