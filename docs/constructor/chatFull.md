# chatFull

**Description** : *Full info about a basic group*

**Layer** : 227

```tl
chatFull#2633421b flags:# can_set_username:flags.7?true has_scheduled:flags.8?true translations_disabled:flags.19?true id:long about:string participants:ChatParticipants chat_photo:flags.2?Photo notify_settings:PeerNotifySettings exported_invite:flags.13?ExportedChatInvite bot_info:flags.3?Vector<BotInfo> pinned_msg_id:flags.6?int folder_id:flags.11?int call:flags.12?InputGroupCall ttl_period:flags.14?int groupcall_default_join_as:flags.15?Peer theme_emoticon:flags.16?string requests_pending:flags.17?int recent_requesters:flags.17?Vector<long> available_reactions:flags.18?ChatReactions reactions_limit:flags.20?int = ChatFull;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : -3585700807418153368,
	about : 'WfykasI9E741J6tu',
	participants : $client->chatParticipantsForbidden(
		chat_id : 3996449041103550241,
		self_participant : $client->chatParticipant(
			user_id : 3454486955140690534,
			inviter_id : 3688258490741197917,
			date : 64,
			rank : 'aWrYCHgGSkfb5cDK',
		),
	),
	chat_photo : $client->photoEmpty(
		id : -956652032276058033,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : false,
		mute_until : 100,
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
		link : '91uJ7IyGX4rpNoVL',
		admin_id : 1538673920111749493,
		date : 64,
		start_date : 53,
		expire_date : 75,
		usage_limit : 95,
		usage : 67,
		requested : 13,
		subscription_expired : 83,
		title : 'bVJpM0KX2wYlEt8k',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 35,
			amount : -2460968164114636508,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : -6033447386076353408,
			description : 'Ofl4KevJB8iWwEQN',
			description_photo : $client->photoEmpty(
				id : 3422093300748848178,
			),
			description_document : $client->documentEmpty(
				id : 3035745398103221131,
			),
			commands : array(
				$client->botCommand(
					command : '1dPzR7AFrnjZe9HC',
					description : 'Ry3X6cNZu47kpsT2',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 15,
				background_dark_color : 5,
				header_color : 9,
				header_dark_color : 54,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -6698613821136973430,
				company : 'R0P9CH3hcXz4OgQ5',
				custom_description : '7lGgpj6wZdxIiTMk',
			),
		),
	),
	pinned_msg_id : 59,
	folder_id : 88,
	call : $client->inputGroupCall(
		id : -4186099565647414708,
		access_hash : -4716968089787227537,
	),
	ttl_period : 28,
	groupcall_default_join_as : $client->peerUser(
		user_id : -1840754231028989069,
	),
	theme_emoticon : 'kpvFoB2MUTfQNVya',
	requests_pending : 66,
	recent_requesters : array(-8969996718673572582),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 29,
);
```