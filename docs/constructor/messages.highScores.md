# messages.highScores

**Description** : *Highscores in a game*

**Layer** : 229

```tl
messages.highScores#9a3bfd99 scores:Vector<HighScore> users:Vector<User> = messages.HighScores;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>scores</mark> | [`Vector<HighScore>`](type/HighScore) | Highscores |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users, associated to the highscores |

---

## Type

[messages.HighScores](type/messages.HighScores)

---

## Example

```php
$messagesHighScores = $client->messages->highScores(
	scores : array(
		$client->highScore(
			pos : 75,
			user_id : 7864134713371047173,
			score : 1,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8377213436715209460,
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
			bot_forum_view : true,
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : -3962471192969075572,
			access_hash : -4285918602513021378,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 45,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'vk3CNDnFQWbSypsA',
					reason : 'MbgFH4fjtcqBTC0z',
					text : 'Rvw1G85SadpgxJoy',
				),
			),
			bot_inline_placeholder : 'lbgG97uFTHKfc25y',
			lang_code : 'kL1H4VTmijh50xUS',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 53,
			),
			color : $client->peerColor(
				color : 41,
				background_emoji_id : -6464422169658157992,
			),
			profile_color : $client->peerColor(
				color : 41,
				background_emoji_id : -285999889026661436,
			),
			bot_active_users : 11,
			bot_verification_icon : -539972148564641926,
			send_paid_messages_stars : 6542699659532012398,
			linked_community_id : -7045645995902126682,
		),
	),
);
```