# stories.foundStories

**Description** : *Stories found using global story search &raquo;*

**Layer** : 214

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
	count : 75,
	stories : array(
		$client->foundStory(
			peer : $client->peerUser(
				user_id : 8751338275337763186,
			),
			story : $client->storyItemDeleted(
				id : 87,
			),
		),
	),
	next_offset : 'ey1p7FHV8TAuaBcm',
	chats : array(
		$client->chatEmpty(
			id : 3731887462210187496,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6538879816769463502,
			title : 'nMF4K9UZ8Q1smkrE',
			photo : $client->chatPhotoEmpty(),
			participants_count : 56,
			date : 53,
			version : 79,
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
				until_date : 90,
			),
		),
		$client->chatForbidden(
			id : -3513816929019907075,
			title : 'B1cXRYydm02KDGjU',
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
			id : -5099483327115961785,
			access_hash : -3320035247511160024,
			title : 'TBI1M9KRgAyPNpJn',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mL4dvAzRBIwfsqVG',
					reason : 'GmakzxRQgbyh59M3',
					text : 'KreSoA0cz2jaPfib',
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
				until_date : 77,
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
				until_date : 54,
			),
			participants_count : 0,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 5,
			color : $client->peerColor(
				color : 27,
				background_emoji_id : -6315155713390208969,
			),
			profile_color : $client->peerColor(
				color : 16,
				background_emoji_id : 6339819799047487025,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 47,
			subscription_until_date : 50,
			bot_verification_icon : -2899307615967571866,
			send_paid_messages_stars : 8870121165362629904,
			linked_monoforum_id : 2948898214468947424,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -8851057723167812357,
			access_hash : -8533414625208153945,
			title : 'N3lJOqQKwjUhn8M4',
			until_date : 46,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1961856298161708047,
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
			id : 6741261865005126631,
			access_hash : 5331528650521449125,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XfRP76wmCxunLzae',
					reason : 'xW8nlQsGgM9fdiFT',
					text : 'Tz0mCokVfRrLlsBP',
				),
			),
			bot_inline_placeholder : 'evWdRDLZA0cKoHkC',
			lang_code : 'SlUVrTHD1fj8QgE4',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 22,
			color : $client->peerColor(
				color : 27,
				background_emoji_id : -568356972948517555,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : -1374997504168226678,
			),
			bot_active_users : 47,
			bot_verification_icon : -1846188477170565982,
			send_paid_messages_stars : -7446380716978714126,
		),
	),
);
```