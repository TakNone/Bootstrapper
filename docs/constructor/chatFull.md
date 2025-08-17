# chatFull

**Description** : *Full info about a basic group*

**Layer** : 211

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
	id : 3848517018754990835,
	about : 'a8qj960fYKd3W2bh',
	participants : $client->chatParticipantsForbidden(
		chat_id : 1168428177756492603,
		self_participant : $client->chatParticipant(
			user_id : -3962423210192181600,
			inviter_id : 4751826405773941150,
			date : 21,
		),
	),
	chat_photo : $client->photoEmpty(
		id : -983325994299260739,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : $client->boolFalse(),
		silent : $client->boolFalse(),
		mute_until : 41,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : $client->boolFalse(),
		stories_hide_sender : $client->boolFalse(),
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
	exported_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'Byw7PQbkjvmsF9Y0',
		admin_id : -4838570244929916944,
		date : 57,
		start_date : 22,
		expire_date : 45,
		usage_limit : 46,
		usage : 25,
		requested : 79,
		subscription_expired : 43,
		title : 'jgS5i80fVI9mlxzv',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 33,
			amount : 6384678696350436299,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : -1874027592995998966,
			description : 'uEyFeUqjGmb3OMpi',
			description_photo : $client->photoEmpty(
				id : 6669965613168021061,
			),
			description_document : $client->documentEmpty(
				id : -419363407595017678,
			),
			commands : array(
				$client->botCommand(
					command : 'pz4GkxjZ51QwXJoO',
					description : 'N3TMD5j1ZX60RzOi',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : 'p.?yLiveProto?C?',
				background_color : 79,
				background_dark_color : 24,
				header_color : 45,
				header_dark_color : 44,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : 3511288355379539029,
				company : 'pNTa7GWcof2OZIit',
				custom_description : 'VzwJ50WjTKeqsdMR',
			),
		),
	),
	pinned_msg_id : 77,
	folder_id : 89,
	call : $client->inputGroupCall(
		id : 4625219410863506562,
		access_hash : -2959778257608988059,
	),
	ttl_period : 63,
	groupcall_default_join_as : $client->peerUser(
		user_id : 762666873775662339,
	),
	theme_emoticon : '10pL3wxOtrYPbSvi',
	requests_pending : 6,
	recent_requesters : array(-279893182817597928),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 2,
);
```