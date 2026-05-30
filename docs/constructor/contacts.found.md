# contacts.found

**Description** : *Users found by name substring and auxiliary data*

**Layer** : 222

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
			user_id : 8993405171674675415,
		),
		$client->peerChat(
			chat_id : -4589034974102840251,
		),
		$client->peerChannel(
			channel_id : -1046078227734208582,
		),
	),
	results : array(
		$client->peerUser(
			user_id : 3642422838508045731,
		),
		$client->peerChat(
			chat_id : -8225287750509013325,
		),
		$client->peerChannel(
			channel_id : -8495764851374882745,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2584990768526091331,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4572030327987095088,
			title : 'BI2j8dRSHhbZ3Ayx',
			photo : $client->chatPhotoEmpty(),
			participants_count : 9,
			date : 97,
			version : 23,
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
				until_date : 30,
			),
		),
		$client->chatForbidden(
			id : 8987107717542778572,
			title : 'h5rPTJDlsmNa1VQf',
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
			id : -102411123706711337,
			access_hash : 8856057129411802811,
			title : 'ZThDMt36rdafboUQ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'bAVECWsHtcnhGjpw',
					reason : 'bfdLrywch6RDPtUC',
					text : 'H7EMcazbeO8CkiDg',
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
				until_date : 29,
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
				until_date : 36,
			),
			participants_count : 63,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 36,
			),
			color : $client->peerColor(
				color : 86,
				background_emoji_id : -4069757899298201861,
			),
			profile_color : $client->peerColor(
				color : 27,
				background_emoji_id : 8294071930447064968,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 48,
			subscription_until_date : 71,
			bot_verification_icon : -5317870936376888236,
			send_paid_messages_stars : -8140277373573137110,
			linked_monoforum_id : -5861266000613774332,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -368950713158687165,
			access_hash : 1280678904446238797,
			title : 'khBZHGArIt85sU1W',
			until_date : 18,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6765379002190710645,
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
			id : 93470326737207552,
			access_hash : 1155734656886053323,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mo8VTJN9zx2C7Odw',
					reason : 'Yf4suO6mH5FjgPl1',
					text : 'oIUzW1wdhT0aviE4',
				),
			),
			bot_inline_placeholder : 'x5ipCl0YRFUOt6TE',
			lang_code : 'pIhCTOsYPxvfBdU0',
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
				max_id : 1,
			),
			color : $client->peerColor(
				color : 1,
				background_emoji_id : -3078302772369635958,
			),
			profile_color : $client->peerColor(
				color : 11,
				background_emoji_id : -7241096923584940560,
			),
			bot_active_users : 29,
			bot_verification_icon : -7892552433927841990,
			send_paid_messages_stars : 4920247619159797841,
		),
	),
);
```