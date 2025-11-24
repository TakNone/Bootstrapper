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
	id : 1777745561687160536,
	about : 'mRg8GOp7yHjdBDN0',
	participants : $client->chatParticipantsForbidden(
		chat_id : 3791864080618147373,
		self_participant : $client->chatParticipant(
			user_id : -9067023257873268409,
			inviter_id : 6337602277050967806,
			date : 54,
		),
	),
	chat_photo : $client->photoEmpty(
		id : -8832909556070961250,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : true,
		mute_until : 29,
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
		link : 'ghstwQji49TnWc83',
		admin_id : 4104516095514545174,
		date : 59,
		start_date : 45,
		expire_date : 49,
		usage_limit : 62,
		usage : 37,
		requested : 31,
		subscription_expired : 11,
		title : 'fBrpXyPVex8UvN2C',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 78,
			amount : 1648689789590196207,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 8602355550022585531,
			description : 'MHnVwp9EqTK8SROg',
			description_photo : $client->photoEmpty(
				id : 8365980664093502047,
			),
			description_document : $client->documentEmpty(
				id : -1303204130723365480,
			),
			commands : array(
				$client->botCommand(
					command : 'ApXLJiNd1D5ztETC',
					description : 'R1Zyivfg9U48L52u',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 73,
				background_dark_color : 36,
				header_color : 98,
				header_dark_color : 75,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -1062612466169107304,
				company : 'VSU1ge34l90Tpqhj',
				custom_description : 'EYBj2NViTchxr8fb',
			),
		),
	),
	pinned_msg_id : 74,
	folder_id : 42,
	call : $client->inputGroupCall(
		id : 3656809198918180117,
		access_hash : -3231101633634637843,
	),
	ttl_period : 8,
	groupcall_default_join_as : $client->peerUser(
		user_id : -8686657870861804539,
	),
	theme_emoticon : 'W6s7kx9IgSEpwAN3',
	requests_pending : 76,
	recent_requesters : array(-6264658385447199749),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 77,
);
```