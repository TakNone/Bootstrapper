# chatFull

**Description** : *Full info about a basic group*

**Layer** : 218

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
	id : -3239612838811996974,
	about : 'sp2PvJbdqtgM9oC4',
	participants : $client->chatParticipantsForbidden(
		chat_id : -5772411733221585576,
		self_participant : $client->chatParticipant(
			user_id : 8681189126701221978,
			inviter_id : -156686439572845591,
			date : 83,
		),
	),
	chat_photo : $client->photoEmpty(
		id : -4065062175231201752,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : true,
		mute_until : 78,
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
		link : 'q86AlZMpyaeL4KoI',
		admin_id : -4604092180041348376,
		date : 49,
		start_date : 53,
		expire_date : 4,
		usage_limit : 60,
		usage : 72,
		requested : 87,
		subscription_expired : 8,
		title : 'fKhvU20PZBxSzyrn',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 28,
			amount : -4664040809136658822,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 890837222666753810,
			description : '87rqUFDCtzkfEey6',
			description_photo : $client->photoEmpty(
				id : -8884317339724192988,
			),
			description_document : $client->documentEmpty(
				id : 8027140061076631032,
			),
			commands : array(
				$client->botCommand(
					command : 'NqsZSYlhBH8xob2Q',
					description : 'G4Tr519hp0swCq2d',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 21,
				background_dark_color : 57,
				header_color : 92,
				header_dark_color : 72,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -3300621107732437581,
				company : 'L04FhDrnmzw3TUxu',
				custom_description : 'boGuE26Bpj3PVXZJ',
			),
		),
	),
	pinned_msg_id : 65,
	folder_id : 41,
	call : $client->inputGroupCall(
		id : -878305413346414699,
		access_hash : 5263209547694634503,
	),
	ttl_period : 88,
	groupcall_default_join_as : $client->peerUser(
		user_id : 2847725586312239188,
	),
	theme_emoticon : 'o0chWndrlQMAiPwe',
	requests_pending : 6,
	recent_requesters : array(4080531793049206417),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 20,
);
```