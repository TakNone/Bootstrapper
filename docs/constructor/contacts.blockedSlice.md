# contacts.blockedSlice

**Description** : *Incomplete list of blocked users*

**Layer** : 214

```tl
contacts.blockedSlice#e1664194 count:int blocked:Vector<PeerBlocked> chats:Vector<Chat> users:Vector<User> = contacts.Blocked;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of elements in the list |
| <mark>blocked</mark> | [`Vector<PeerBlocked>`](type/PeerBlocked) | List of blocked users |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Blocked chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.Blocked](type/contacts.Blocked)

---

## Example

```php
$contactsBlocked = $client->contacts->blockedSlice(
	count : 59,
	blocked : array(
		$client->peerBlocked(
			peer_id : $client->peerUser(
				user_id : 7480703649814440579,
			),
			date : 69,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -8067307828821303567,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8472247012853994775,
			title : 'QIJCugKTscEoiznR',
			photo : $client->chatPhotoEmpty(),
			participants_count : 12,
			date : 10,
			version : 77,
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
				until_date : 92,
			),
		),
		$client->chatForbidden(
			id : 5923676485408946334,
			title : 'L1i6TnuhdrRykEcq',
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
			id : 3075597382309799636,
			access_hash : 6541428449356351568,
			title : 'nUIcp4YbE9MrZxLm',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 0,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'FVCs67pDgzNYJqOk',
					reason : 'Q7OmKItaC5E4eB0p',
					text : 'JYmI0RyA3tvDXc4Z',
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
				until_date : 55,
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
				until_date : 70,
			),
			participants_count : 99,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 50,
			color : $client->peerColor(
				color : 34,
				background_emoji_id : 1993500984492325191,
			),
			profile_color : $client->peerColor(
				color : 88,
				background_emoji_id : -1286952539501932472,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 51,
			subscription_until_date : 21,
			bot_verification_icon : 7066832107411498770,
			send_paid_messages_stars : 386586894948134989,
			linked_monoforum_id : 4228281951224386667,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4256586135798566270,
			access_hash : 3194181573047086213,
			title : 'OZg8q6RNXayM3Vzh',
			until_date : 28,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7127884322383106022,
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
			id : 8258785799702879848,
			access_hash : -7100855501798398326,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 6,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8qVCFiKaxWcEvm6N',
					reason : 'nCQWi8pZTAYeHzjf',
					text : 'Nw0rdHiAm29ckfQh',
				),
			),
			bot_inline_placeholder : 'JTi2ynQMqz1AbNVw',
			lang_code : 'ZHIJuGmFedE8cgpY',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 36,
			color : $client->peerColor(
				color : 15,
				background_emoji_id : 2723025222826282222,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : 5528319421631281510,
			),
			bot_active_users : 81,
			bot_verification_icon : 7292656721244933469,
			send_paid_messages_stars : -46039027823522164,
		),
	),
);
```