# chatFull

**Description** : *Full info about a basic group*

**Layer** : 222

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
	id : 7348183177744473741,
	about : 'T3Y4HNr7gFfRMPv5',
	participants : $client->chatParticipantsForbidden(
		chat_id : 5874485959292123128,
		self_participant : $client->chatParticipant(
			user_id : -3536247121795433175,
			inviter_id : -4184760183478469847,
			date : 36,
		),
	),
	chat_photo : $client->photoEmpty(
		id : -2639190407976560727,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : true,
		mute_until : 76,
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
		link : 'xwUEPHfoFdKaZnMq',
		admin_id : -6206056455862320039,
		date : 38,
		start_date : 21,
		expire_date : 5,
		usage_limit : 52,
		usage : 23,
		requested : 59,
		subscription_expired : 3,
		title : 'GwZDMmyhg9jWalpY',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 100,
			amount : -276213277594272838,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : -3411241252091037362,
			description : 'jB420i8t1wd3ze5y',
			description_photo : $client->photoEmpty(
				id : -1945371120453831216,
			),
			description_document : $client->documentEmpty(
				id : -4525352089340655176,
			),
			commands : array(
				$client->botCommand(
					command : 'dwIctWfsiJYxhen9',
					description : 'Ihm8zCPvKro3Y2Ug',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 47,
				background_dark_color : 35,
				header_color : 30,
				header_dark_color : 8,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -2444883441836694604,
				company : 'GjXuAoVwx7gdqbes',
				custom_description : '5dkZyltfiOMNFL6V',
			),
		),
	),
	pinned_msg_id : 34,
	folder_id : 94,
	call : $client->inputGroupCall(
		id : -8850388700234603949,
		access_hash : -4672773013656722899,
	),
	ttl_period : 95,
	groupcall_default_join_as : $client->peerUser(
		user_id : -6928730937367200820,
	),
	theme_emoticon : '4vRl79Wg1cqoCYU8',
	requests_pending : 93,
	recent_requesters : array(-2716242691500466803),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 28,
);
```