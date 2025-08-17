# contacts.topPeers

**Description** : *Top peers*

**Layer** : 211

```tl
contacts.topPeers#70b772a8 categories:Vector<TopPeerCategoryPeers> chats:Vector<Chat> users:Vector<User> = contacts.TopPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>categories</mark> | [`Vector<TopPeerCategoryPeers>`](type/TopPeerCategoryPeers) | Top peers by top peer category |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[contacts.TopPeers](type/contacts.TopPeers)

---

## Example

```php
$contactsTopPeers = $client->contacts->topPeers(
	categories : array(
		$client->topPeerCategoryPeers(
			category : $client->topPeerCategoryBotsPM(),
			count : 15,
			peers : array(
				$client->topPeer(
					peer : $client->peerUser(...),
					rating : 1541303.9375,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6536950013178585743,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4084517355825818741,
			title : '1uzvgVQpR8a9yBiD',
			photo : $client->chatPhotoEmpty(),
			participants_count : 54,
			date : 80,
			version : 66,
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
				until_date : 51,
			),
		),
		$client->chatForbidden(
			id : 6543578053193238431,
			title : 'LiSQoqAXYhyuMds6',
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
			id : -4784013938786830178,
			access_hash : 2786592964005353471,
			title : 'gDGhpkOCP31Bnt2Z',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 69,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '32eBUdNgw9AcK7hu',
					reason : 'dnV8tmbiZOQcxTEv',
					text : 'hFeNGcsiQV8bYjvw',
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
				until_date : 90,
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
				until_date : 69,
			),
			participants_count : 17,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 91,
			color : $client->peerColor(
				color : 23,
				background_emoji_id : -5921020711954714765,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : -5705005203560100329,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 56,
			subscription_until_date : 81,
			bot_verification_icon : -8721708851218014338,
			send_paid_messages_stars : 7529444605049673089,
			linked_monoforum_id : 8568883224172267818,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4487491333562832832,
			access_hash : 2033730991207326418,
			title : 'pSod2nqe15T3CbPj',
			until_date : 68,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6254809706247681584,
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
			id : 6554408772106246401,
			access_hash : -5011827264806939139,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'd8aerPGVISEzx5cu',
					reason : 'UgnjrY2qBctOe1kd',
					text : 'Z8QfHsgw2NxCiO3E',
				),
			),
			bot_inline_placeholder : 'utX5yP63ixnVMEcZ',
			lang_code : 'BQzfnaRhFAVkcCLu',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 18,
			color : $client->peerColor(
				color : 26,
				background_emoji_id : -6572802083475422991,
			),
			profile_color : $client->peerColor(
				color : 55,
				background_emoji_id : -113679568368766630,
			),
			bot_active_users : 32,
			bot_verification_icon : -5640132678084924147,
			send_paid_messages_stars : -8949930682074847140,
		),
	),
);
```