# stories.foundStories

**Description** : *Stories found using global story search »*

**Layer** : 211

```tl
stories.foundStories#e2de7737 flags:# count:int stories:Vector<FoundStory> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = stories.FoundStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results found for the query |
| <mark>stories</mark> | [`Vector<FoundStory>`](type/FoundStory) | Matching stories |
| **next_offset** | [`flags.0?string`](type/string) | Offset used to fetch the next page, if not set this is the final page |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.FoundStories](type/stories.FoundStories)

---

## Example

```php
$storiesFoundStories = $client->stories->foundStories(
	count : 19,
	stories : array(
		$client->foundStory(
			peer : $client->peerUser(
				user_id : -8745071825593224613,
			),
			story : $client->storyItemDeleted(
				id : 62,
			),
		),
	),
	next_offset : 'cmSG8ZIqyLnauPC0',
	chats : array(
		$client->chatEmpty(
			id : 3114258720952208023,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2792616713030529603,
			title : '1SIlsMOzpu6hfryZ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 28,
			date : 65,
			version : 49,
			migrated_to : $client->inputChannelEmpty(),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 39,
			),
		),
		$client->chatForbidden(
			id : -7880832434092336839,
			title : 'MxXnkGHESj0v9leB',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -2555447220809202938,
			access_hash : 1812125785893499831,
			title : 'u7g8wZ23kyIKUjXE',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 29,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2vcKgMqTlWZNDV6E',
					reason : 'Dred5vtcPxgH7CoA',
					text : 'OVTjGqJlhiQKo74y',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 12,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 29,
			),
			participants_count : 54,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 89,
			color : $client->peerColor(
				color : 60,
				background_emoji_id : 8595245887445870257,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : -3518740442762897151,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 100,
			subscription_until_date : 81,
			bot_verification_icon : -1485839682183223601,
			send_paid_messages_stars : -1532578219274157360,
			linked_monoforum_id : 5510823120373052025,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4498255723610903038,
			access_hash : 4537511474137021128,
			title : 'Cdg38fc0PVswJONK',
			until_date : 79,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6759343519812417598,
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
			id : 5867515737041836083,
			access_hash : -3451941639374342736,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'DkfvLNtHRIjXPnz0',
					reason : 'CaGTY8dzu3QENcMF',
					text : 'pRO5bdcjqishFu7N',
				),
			),
			bot_inline_placeholder : 'pZTBfO95ruaSeUnJ',
			lang_code : '7chGHFRuqTOikDK6',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 67,
			color : $client->peerColor(
				color : 53,
				background_emoji_id : -3239637307856080188,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : -4000438840176749920,
			),
			bot_active_users : 55,
			bot_verification_icon : 4619030830229599104,
			send_paid_messages_stars : -5299335214148718634,
		),
	),
);
```