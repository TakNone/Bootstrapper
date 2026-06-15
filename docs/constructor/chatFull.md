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
	id : -7910314847290609276,
	about : 'rKNPt47WGnFXH6f9',
	participants : $client->chatParticipantsForbidden(
		chat_id : -3377968858186996377,
		self_participant : $client->chatParticipant(
			user_id : 7153929640346674206,
			inviter_id : 1152859240513669595,
			date : 81,
			rank : 'aoHnX9m0PD6dzrBL',
		),
	),
	chat_photo : $client->photoEmpty(
		id : 450432892625882734,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
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
		link : 'jeZWwMu1Ifh6vrVS',
		admin_id : -3491645176460880086,
		date : 78,
		start_date : 79,
		expire_date : 13,
		usage_limit : 11,
		usage : 61,
		requested : 25,
		subscription_expired : 11,
		title : '5R8wWp6zbScGEgDy',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 51,
			amount : -3606914784889517173,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 2676421154251271712,
			description : 'lPin1fAk84bZ0ht5',
			description_photo : $client->photoEmpty(
				id : -3132996024281073913,
			),
			description_document : $client->documentEmpty(
				id : -974646259889650367,
			),
			commands : array(
				$client->botCommand(
					command : 'ZeL87IzhusFPHrCq',
					description : 'rCPWmLq3nUdQ80tc',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 39,
				background_dark_color : 100,
				header_color : 61,
				header_dark_color : 79,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -5310389167654402631,
				company : '8zq3Du2mUal7VZ1K',
				custom_description : 'uiEGls9whVqW35RI',
			),
		),
	),
	pinned_msg_id : 16,
	folder_id : 26,
	call : $client->inputGroupCall(
		id : 4107193010213929679,
		access_hash : 5831689164310277275,
	),
	ttl_period : 54,
	groupcall_default_join_as : $client->peerUser(
		user_id : -461220007331044468,
	),
	theme_emoticon : 'JTIk1yS5QfMUu8aG',
	requests_pending : 89,
	recent_requesters : array(8566984734581012982),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 99,
);
```