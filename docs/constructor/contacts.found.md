# contacts.found

**Description** : *Users found by name substring and auxiliary data*

**Layer** : 214

```tl
contacts.found#b3134d9d my_results:Vector<Peer> results:Vector<Peer> chats:Vector<Chat> users:Vector<User> = contacts.Found;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>my_results</mark> | [`Vector<Peer>`](type/Peer) | Personalized results |
| <mark>results</mark> | [`Vector<Peer>`](type/Peer) | List of found user identifiers |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Found chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.Found](type/contacts.Found)

---

## Example

```php
$contactsFound = $client->contacts->found(
	my_results : array(
		$client->peerUser(
			user_id : -1889478186550135313,
		),
		$client->peerChat(
			chat_id : 3708025850116989029,
		),
		$client->peerChannel(
			channel_id : -5690639313063835372,
		),
	),
	results : array(
		$client->peerUser(
			user_id : -485949715780621443,
		),
		$client->peerChat(
			chat_id : 2029172415719122414,
		),
		$client->peerChannel(
			channel_id : 8581217899896786363,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6119910421688399004,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6692910543986815248,
			title : 'dLAFZmGtiElTajSY',
			photo : $client->chatPhotoEmpty(),
			participants_count : 6,
			date : 19,
			version : 45,
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
				until_date : 21,
			),
		),
		$client->chatForbidden(
			id : 8069197378796923849,
			title : 'Fjp7sgOTMlLqxBVt',
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
			id : 5702759116435906636,
			access_hash : -8299545951970823878,
			title : '46r9QB82iNKfpnDU',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 71,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'm4IWCSuzeQXTcwN6',
					reason : 'UNDkbxSqWilH0hw4',
					text : 'd2frKFagTuH5DC8x',
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
				until_date : 19,
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
				until_date : 49,
			),
			participants_count : 79,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 54,
			color : $client->peerColor(
				color : 30,
				background_emoji_id : 7027880699965136503,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : 6414467579497472272,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 35,
			subscription_until_date : 82,
			bot_verification_icon : -3881912695606157729,
			send_paid_messages_stars : -5208150922591696118,
			linked_monoforum_id : -5226454375273468287,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1416088748907158283,
			access_hash : 3311202853868421394,
			title : 'HCNWY1hJEQ4ZoRef',
			until_date : 10,
		),
	),
	users : array(
		$client->userEmpty(
			id : -9049082236211066399,
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
			id : -5568572929149579776,
			access_hash : 8279177159577311372,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 41,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IFh9C5MTbRHJB6vG',
					reason : '1G83cSovqd9Tk2Yg',
					text : 'WbN73yAlQdThsVUu',
				),
			),
			bot_inline_placeholder : 'p1fer93uzTbgJkqI',
			lang_code : 'i0rZCvWxIT6U89dq',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 68,
			color : $client->peerColor(
				color : 25,
				background_emoji_id : 290926628988594860,
			),
			profile_color : $client->peerColor(
				color : 79,
				background_emoji_id : -4165768142832347454,
			),
			bot_active_users : 89,
			bot_verification_icon : -2663277960682261197,
			send_paid_messages_stars : 3753517555254811435,
		),
	),
);
```