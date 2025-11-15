# contacts.topPeers

**Description** : *Top peers*

**Layer** : 216

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
			count : 98,
			peers : array(
				$client->topPeer(
					peer : $client->peerUser(...),
					rating : 1906364.5595703125,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3917645535788600502,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7069926353257170800,
			title : 'OTvEewXm1VPG6acB',
			photo : $client->chatPhotoEmpty(),
			participants_count : 97,
			date : 39,
			version : 12,
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
				until_date : 3,
			),
		),
		$client->chatForbidden(
			id : -895038240390111660,
			title : 'Y6ZJjM57BUrtciuI',
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
			id : -8961227446318165478,
			access_hash : -2387794175633026,
			title : 'YnZv0UbOd1o8lXiS',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 47,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'UuNtK0gIjyw8Opz1',
					reason : '1HUm3wgaePLDsrAQ',
					text : 'mOXdK17c8LZ90pCr',
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
				until_date : 91,
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
				until_date : 78,
			),
			participants_count : 51,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 73,
			color : $client->peerColor(
				color : 23,
				background_emoji_id : -4018863985608826611,
			),
			profile_color : $client->peerColor(
				color : 10,
				background_emoji_id : -2219888614289016443,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 10,
			subscription_until_date : 42,
			bot_verification_icon : 212346733149357384,
			send_paid_messages_stars : 788156644626874385,
			linked_monoforum_id : 167562168040383355,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -5597206547454394295,
			access_hash : 7958120310789223840,
			title : 'BD7VZdcLbor8zIxg',
			until_date : 93,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1350780796993420586,
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
			id : 6316579089174828350,
			access_hash : 1644182602593823721,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wV4ztI725EFq6lxo',
					reason : 'tHybnK3sWrRJpiFo',
					text : '6d4OIgyq23PipRcE',
				),
			),
			bot_inline_placeholder : 'hTj74xJa1EuRDmMn',
			lang_code : 'ClShPrABQgvdqbOc',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 82,
			color : $client->peerColor(
				color : 2,
				background_emoji_id : -6750009954186041712,
			),
			profile_color : $client->peerColor(
				color : 17,
				background_emoji_id : -3368656330064791589,
			),
			bot_active_users : 84,
			bot_verification_icon : -2902843809431300121,
			send_paid_messages_stars : 5577412557407103481,
		),
	),
);
```