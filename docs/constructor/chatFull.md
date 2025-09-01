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
	id : 4862279108540035699,
	about : '1IDKzdTbu2qnjxvG',
	participants : $client->chatParticipantsForbidden(
		chat_id : -8623282385827475001,
		self_participant : $client->chatParticipant(
			user_id : 3352939036504338744,
			inviter_id : 6455083037002380053,
			date : 75,
		),
	),
	chat_photo : $client->photoEmpty(
		id : -6120677793717201008,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : false,
		mute_until : 15,
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
		link : 'Q9ajGYoqOp1lHLmT',
		admin_id : -4445543664053067218,
		date : 11,
		start_date : 63,
		expire_date : 47,
		usage_limit : 33,
		usage : 42,
		requested : 37,
		subscription_expired : 62,
		title : 'bmyhgVIO18lnZTGo',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 47,
			amount : -3592531655197561262,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 3651713078786246404,
			description : 'wTcDgsWhrXZtK472',
			description_photo : $client->photoEmpty(
				id : 8996126959807589428,
			),
			description_document : $client->documentEmpty(
				id : 682854792548763760,
			),
			commands : array(
				$client->botCommand(
					command : 'vrcnWNZzRJ4gBf6d',
					description : 'KjGaYmDM2AWHUcIE',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 6,
				background_dark_color : 3,
				header_color : 3,
				header_dark_color : 38,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : 5498191682180574645,
				company : 'FmH6ZLNObyWEs3iA',
				custom_description : 'zAj7VpDLUcmgYyJS',
			),
		),
	),
	pinned_msg_id : 37,
	folder_id : 62,
	call : $client->inputGroupCall(
		id : -8019207228423782576,
		access_hash : 7771600906261441161,
	),
	ttl_period : 29,
	groupcall_default_join_as : $client->peerUser(
		user_id : 7383349599082582131,
	),
	theme_emoticon : 'pGCRgkQzJ5YcyZ1V',
	requests_pending : 30,
	recent_requesters : array(-5465522504272807338),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 68,
);
```