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
	id : 2423707250099283582,
	about : 'SZl2XiBN5HW4TLn0',
	participants : $client->chatParticipantsForbidden(
		chat_id : 5288662427404588127,
		self_participant : $client->chatParticipant(
			user_id : -4257936544403542230,
			inviter_id : 1259066798512571045,
			date : 87,
		),
	),
	chat_photo : $client->photoEmpty(
		id : 7963072923227819106,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : false,
		mute_until : 18,
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
		link : 'pUb6Jiq7nWPOEuKH',
		admin_id : -8524461908030678549,
		date : 81,
		start_date : 67,
		expire_date : 57,
		usage_limit : 79,
		usage : 10,
		requested : 82,
		subscription_expired : 27,
		title : 'jUGV0krfAJNK3He2',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 60,
			amount : 94638886589722643,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 4884108958006876485,
			description : 'O7elRuKikL2MSQmF',
			description_photo : $client->photoEmpty(
				id : -4377655607659223547,
			),
			description_document : $client->documentEmpty(
				id : -2663281634515202240,
			),
			commands : array(
				$client->botCommand(
					command : '59OhTUjMvdeAxrKN',
					description : 'Wq1JezXjiEwfS0DT',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 14,
				background_dark_color : 89,
				header_color : 95,
				header_dark_color : 51,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -1925899206893107292,
				company : 'v9wGkdcN6RzDixhu',
				custom_description : 'c7zUE9MfoiHPmbTY',
			),
		),
	),
	pinned_msg_id : 99,
	folder_id : 34,
	call : $client->inputGroupCall(
		id : -2038558227614608743,
		access_hash : -6446799987773486727,
	),
	ttl_period : 68,
	groupcall_default_join_as : $client->peerUser(
		user_id : -4051880896457952254,
	),
	theme_emoticon : 'VIDquY1paEomCMUb',
	requests_pending : 61,
	recent_requesters : array(-6543616060455546960),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 94,
);
```