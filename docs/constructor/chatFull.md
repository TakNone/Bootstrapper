# chatFull

**Description** : *Full info about a basic group*

**Layer** : 216

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
	id : 1820393723342283884,
	about : 'G79W5DsZgfVjwJKb',
	participants : $client->chatParticipantsForbidden(
		chat_id : 8885108520906794391,
		self_participant : $client->chatParticipant(
			user_id : -6592620686879800974,
			inviter_id : -3492909240158723825,
			date : 11,
		),
	),
	chat_photo : $client->photoEmpty(
		id : -3982779954096647369,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : false,
		mute_until : 62,
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
		link : 'bAvrKIt5iY7humVq',
		admin_id : -5324741433059126924,
		date : 74,
		start_date : 45,
		expire_date : 7,
		usage_limit : 41,
		usage : 5,
		requested : 8,
		subscription_expired : 21,
		title : '6IrAf8YBnbR4e5KW',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 37,
			amount : 7532569516919331128,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 1261482650388566253,
			description : 'EDpxmw1h9Yas5jPv',
			description_photo : $client->photoEmpty(
				id : -5102327471380126516,
			),
			description_document : $client->documentEmpty(
				id : 6833423689448911976,
			),
			commands : array(
				$client->botCommand(
					command : '187TIUCPpmLiXrSc',
					description : 'cgnTpXOKHfGC5Wao',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 31,
				background_dark_color : 13,
				header_color : 61,
				header_dark_color : 31,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -2455972154123368793,
				company : 'UpJTnjKmr73EV8vW',
				custom_description : 's1P6F9WCZVzokXmi',
			),
		),
	),
	pinned_msg_id : 5,
	folder_id : 6,
	call : $client->inputGroupCall(
		id : -8309318276704602889,
		access_hash : 3788209391636030762,
	),
	ttl_period : 5,
	groupcall_default_join_as : $client->peerUser(
		user_id : -9053903407769302879,
	),
	theme_emoticon : '9c6XSxlNuDegIKC0',
	requests_pending : 20,
	recent_requesters : array(-1265002914616202644),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 94,
);
```