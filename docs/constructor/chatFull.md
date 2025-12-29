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
	id : 1264586236184060385,
	about : 'BFE9D07Wlp6NZ18g',
	participants : $client->chatParticipantsForbidden(
		chat_id : -2428813296161296514,
		self_participant : $client->chatParticipant(
			user_id : 8751283450490260754,
			inviter_id : -8457661346178332255,
			date : 47,
		),
	),
	chat_photo : $client->photoEmpty(
		id : -1926289980400320918,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : false,
		silent : true,
		mute_until : 71,
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
		link : '6ijrX20ytUZDRgxV',
		admin_id : -7799854791547612997,
		date : 89,
		start_date : 66,
		expire_date : 2,
		usage_limit : 75,
		usage : 29,
		requested : 82,
		subscription_expired : 45,
		title : 'JQ0P782gNxBA1Yif',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 36,
			amount : 2073110795880932196,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 4638544087415654885,
			description : 'r4Vzwak3G8IcBo9f',
			description_photo : $client->photoEmpty(
				id : -6978684653890444814,
			),
			description_document : $client->documentEmpty(
				id : -1009592498714627081,
			),
			commands : array(
				$client->botCommand(
					command : '65cblkZEoX1GiwKB',
					description : '0NLTDdZu2zfKGWBJ',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 63,
				background_dark_color : 16,
				header_color : 64,
				header_dark_color : 56,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : 8452596256474599522,
				company : 'h2P9tJxAIY6kURNM',
				custom_description : 'kumsQtZJX3TDE1vP',
			),
		),
	),
	pinned_msg_id : 23,
	folder_id : 63,
	call : $client->inputGroupCall(
		id : -7367694541291118338,
		access_hash : 179013153348631153,
	),
	ttl_period : 67,
	groupcall_default_join_as : $client->peerUser(
		user_id : -2565502889925345408,
	),
	theme_emoticon : 'kfw82eTXb1HiaOGj',
	requests_pending : 29,
	recent_requesters : array(2324420605386566506),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 15,
);
```