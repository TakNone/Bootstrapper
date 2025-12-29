# messages.webPage

**Description** : *Represents an Instant View webpage*

**Layer** : 218

```tl
messages.webPage#fd5e12bd webpage:WebPage chats:Vector<Chat> users:Vector<User> = messages.WebPage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>webpage</mark> | [`WebPage`](type/WebPage) | The instant view webpage |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in the webpage |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the webpage |

---

## Type

[messages.WebPage](type/messages.WebPage)

---

## Example

```php
$messagesWebPage = $client->messages->webPage(
	webpage : $client->webPageEmpty(
		id : 548614963993355481,
		url : 'https://docs.liveproto.dev',
	),
	chats : array(
		$client->chatEmpty(
			id : -2874062662306512606,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7062786271191306832,
			title : 'WpyUPteL6jOdkzla',
			photo : $client->chatPhotoEmpty(),
			participants_count : 100,
			date : 57,
			version : 85,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				until_date : 97,
			),
		),
		$client->chatForbidden(
			id : -5053390876249164519,
			title : 'vn8PTMluxjFdmYWy',
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
			id : -1078493423487215440,
			access_hash : 303295910687406909,
			title : '4DfPzaxsRObE2cdV',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 69,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'xwrFCf9GU4i37ybm',
					reason : '72D8txmAEloUawgj',
					text : 'KTY3sc5zojI6tBkE',
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
				until_date : 100,
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
				until_date : 4,
			),
			participants_count : 36,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 68,
			),
			color : $client->peerColor(
				color : 32,
				background_emoji_id : 8400578425536485525,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : 5467079403273744092,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 51,
			subscription_until_date : 62,
			bot_verification_icon : 1043779426290676908,
			send_paid_messages_stars : 4805284492457807680,
			linked_monoforum_id : -2425392192754610356,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4976498223165003730,
			access_hash : 5286135706119170830,
			title : 't5hjJ8syCxv2wiWX',
			until_date : 21,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2316497821031655315,
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
			id : 6095978192585120240,
			access_hash : 7820417480708834680,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'l4905o1XPsBUQc2H',
					reason : 'h7ds0oEODHZY6k59',
					text : 'LMbz6RoQHKc4OnNf',
				),
			),
			bot_inline_placeholder : 'cmSGBgTXVHr4uito',
			lang_code : 'tkhDewluIaGUmSy4',
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
				max_id : 58,
			),
			color : $client->peerColor(
				color : 29,
				background_emoji_id : 6404609151327986711,
			),
			profile_color : $client->peerColor(
				color : 60,
				background_emoji_id : 3480942153100054369,
			),
			bot_active_users : 97,
			bot_verification_icon : 516176742597872285,
			send_paid_messages_stars : 7329702366394777233,
		),
	),
);
```