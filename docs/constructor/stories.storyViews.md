# stories.storyViews

**Description** : *Reaction and view counters for a list of stories*

**Layer** : 211

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
			views_count : 15,
			forwards_count : 15,
			reactions : array(
				$client->reactionCount(
					chosen_order : 8,
					reaction : $client->reactionEmpty(...),
					count : 58,
				),
			),
			reactions_count : 5,
			recent_viewers : array(7476485271752896943),
		),
	),
	users : array(
		$client->userEmpty(
			id : 8655557275530043094,
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
			id : 4601879827182753180,
			access_hash : -6310120086792416954,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 81,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'n03h9ovAZjywiI51',
					reason : 'reQPn9hbmVfWu5jk',
					text : 'gQonZTkVSIrON2iU',
				),
			),
			bot_inline_placeholder : 'ufo7wlpIJ36NV1zZ',
			lang_code : 'npjhE9iOmlrbc8XU',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 61,
			color : $client->peerColor(
				color : 11,
				background_emoji_id : 5394064880927905048,
			),
			profile_color : $client->peerColor(
				color : 68,
				background_emoji_id : -6404987831845053515,
			),
			bot_active_users : 86,
			bot_verification_icon : -3361013288088833167,
			send_paid_messages_stars : 1462992607863458496,
		),
	),
);
```