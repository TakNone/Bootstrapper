# stories.storyViews

**Description** : *Reaction and view counters for a list of stories*

**Layer** : 214

```tl
stories.storyViews#de9eed1d views:Vector<StoryViews> users:Vector<User> = stories.StoryViews;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>views</mark> | [`Vector<StoryViews>`](type/StoryViews) | View date and reaction information of multiple stories |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.StoryViews](type/stories.StoryViews)

---

## Example

```php
$storiesStoryViews = $client->stories->storyViews(
	views : array(
		$client->storyViews(
			has_viewers : true,
			views_count : 61,
			forwards_count : 72,
			reactions : array(
				$client->reactionCount(
					chosen_order : 78,
					reaction : $client->reactionEmpty(...),
					count : 52,
				),
			),
			reactions_count : 65,
			recent_viewers : array(2110450998341597338),
		),
	),
	users : array(
		$client->userEmpty(
			id : -8940652813608340804,
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
			id : 3416867247833380970,
			access_hash : 2212287585019923856,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 98,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Ur9ibOBdJf2n61QD',
					reason : '67oCVLNSE2dGzqib',
					text : 'fINHaBQgjUwJnYEr',
				),
			),
			bot_inline_placeholder : 'yqGgF4T3bMisj1ap',
			lang_code : 'vOKyxmdMPglL42Qz',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 97,
			color : $client->peerColor(
				color : 93,
				background_emoji_id : -7627758975450997027,
			),
			profile_color : $client->peerColor(
				color : 27,
				background_emoji_id : -6327437354920682252,
			),
			bot_active_users : 3,
			bot_verification_icon : 8780499654406310192,
			send_paid_messages_stars : 7691755984394983053,
		),
	),
);
```