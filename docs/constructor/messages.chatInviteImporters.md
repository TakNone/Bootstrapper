# messages.chatInviteImporters

**Description** : *Info about the users that joined the chat using a specific chat invite*

**Layer** : 211

```tl
messages.chatInviteImporters#81b6b00a count:int importers:Vector<ChatInviteImporter> users:Vector<User> = messages.ChatInviteImporters;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of users that joined |
| <mark>importers</mark> | [`Vector<ChatInviteImporter>`](type/ChatInviteImporter) | The users that joined |
| <mark>users</mark> | [`Vector<User>`](type/User) | The users that joined |

---

## Type

[messages.ChatInviteImporters](type/messages.ChatInviteImporters)

---

## Example

```php
$messagesChatInviteImporters = $client->messages->chatInviteImporters(
	count : 76,
	importers : array(
		$client->chatInviteImporter(
			requested : true,
			via_chatlist : true,
			user_id : -7087262286102129611,
			date : 80,
			about : 'hmArBcUnaXpgJoqH',
			approved_by : -8927070295312554359,
		),
	),
	users : array(
		$client->userEmpty(
			id : -9067621257269374046,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			id : 814142742143609579,
			access_hash : 8619976202075160049,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XiSb2qvNhwdDClRV',
					reason : 'TDu1OUGW4XBL2A3m',
					text : 'WJufQc2zt5vCm1XK',
				),
			),
			bot_inline_placeholder : 'T968teHBInRFYLqJ',
			lang_code : 'wil8rY3OvpQZJDht',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 48,
			color : $client->peerColor(
				color : 6,
				background_emoji_id : 7205401794329373339,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : -8879028684183784837,
			),
			bot_active_users : 6,
			bot_verification_icon : -6049991674917634004,
			send_paid_messages_stars : -7053582595843516584,
		),
	),
);
```