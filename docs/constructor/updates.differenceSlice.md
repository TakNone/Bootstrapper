# updates.differenceSlice

**Description** : *Incomplete list of occurred events*

**Layer** : 214

```tl
updates.differenceSlice#a8fb1981 new_messages:Vector<Message> new_encrypted_messages:Vector<EncryptedMessage> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> intermediate_state:updates.State = updates.Difference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | List of new messages |
| <mark>new_encrypted_messages</mark> | [`Vector<EncryptedMessage>`](type/EncryptedMessage) | New messages from the encrypted event sequence |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in events |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in events |
| <mark>intermediate_state</mark> | [`updates.State`](type/updates.State) | Intermediary state |

---

## Type

[updates.Difference](type/updates.Difference)

---

## Example

```php
$updatesDifference = $client->updates->differenceSlice(
	new_messages : array(
		$client->messageEmpty(
			id : 49,
			peer_id : $client->peerUser(
				user_id : -6828129715644692101,
			),
		),
		$client->message(
			out : true,
			mentioned : true,
			media_unread : true,
			silent : true,
			post : true,
			from_scheduled : true,
			legacy : true,
			edit_hide : true,
			pinned : true,
			noforwards : true,
			invert_media : true,
			offline : true,
			video_processing_pending : true,
			paid_suggested_post_stars : true,
			paid_suggested_post_ton : true,
			id : 83,
			from_id : $client->peerUser(
				user_id : -6759588124813892730,
			),
			from_boosts_applied : 99,
			peer_id : $client->peerUser(
				user_id : 4231714683990001583,
			),
			saved_peer_id : $client->peerUser(
				user_id : -2906425640689177370,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'xpHkuBnF9MAI7fSE',
				date : 24,
				channel_post : 32,
				post_author : 'RuhGUqD7pKSy8eIJ',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 50,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'K8H2BOpcWZAElLwR',
				saved_date : 9,
				psa_type : 'eUixrSjd8GmfI5aV',
			),
			via_bot_id : 726635156763137956,
			via_business_bot_id : 6873526090292864044,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 26,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 48,
				quote_text : 'N5HKrojhGyFtXVuU',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 96,
				todo_item_id : 29,
			),
			date : 76,
			message : 'SeqQBcVzLCpyKgId',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 2,
					length : 73,
				),
				$client->messageEntityMention(
					offset : 68,
					length : 21,
				),
				$client->messageEntityHashtag(
					offset : 30,
					length : 85,
				),
				$client->messageEntityBotCommand(
					offset : 46,
					length : 83,
				),
				$client->messageEntityUrl(
					offset : 53,
					length : 27,
				),
				$client->messageEntityEmail(
					offset : 81,
					length : 56,
				),
				$client->messageEntityBold(
					offset : 29,
					length : 37,
				),
				$client->messageEntityItalic(
					offset : 57,
					length : 7,
				),
				$client->messageEntityCode(
					offset : 10,
					length : 36,
				),
				$client->messageEntityPre(
					offset : 25,
					length : 88,
					language : '1B2mQtHUCwZyajOn',
				),
				$client->messageEntityTextUrl(
					offset : 49,
					length : 59,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 61,
					length : 78,
					user_id : -8196800164414292017,
				),
				$client->inputMessageEntityMentionName(
					offset : 28,
					length : 86,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 45,
					length : 34,
				),
				$client->messageEntityCashtag(
					offset : 21,
					length : 46,
				),
				$client->messageEntityUnderline(
					offset : 36,
					length : 64,
				),
				$client->messageEntityStrike(
					offset : 88,
					length : 3,
				),
				$client->messageEntityBankCard(
					offset : 3,
					length : 46,
				),
				$client->messageEntitySpoiler(
					offset : 17,
					length : 34,
				),
				$client->messageEntityCustomEmoji(
					offset : 41,
					length : 30,
					document_id : 4439829082160583921,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 7,
					length : 32,
				),
			),
			views : 0,
			forwards : 100,
			replies : $client->messageReplies(
				comments : true,
				replies : 88,
				replies_pts : 21,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : 5363441233248230892,
				max_id : 18,
				read_max_id : 84,
			),
			edit_date : 85,
			post_author : 'gUZWReBk5LO0iEfu',
			grouped_id : -8174045792588667597,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'q62HnOyj8wDRGgS3',
					reason : '4AS9TehUrz35vt1H',
					text : 'zrcDUenFvOIbZa7x',
				),
			),
			ttl_period : 49,
			quick_reply_shortcut_id : 38,
			effect : -8389008300079265614,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'y3tFLal8O9jZEIuX',
				text : $client->textWithEntities(...),
				hash : 935304354960731762,
			),
			report_delivery_until_date : 84,
			paid_message_stars : -7099392216258641321,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 3,
			),
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 61,
			from_id : $client->peerUser(
				user_id : -573913052862912582,
			),
			peer_id : $client->peerUser(
				user_id : -7409244306213381476,
			),
			saved_peer_id : $client->peerUser(
				user_id : -3967190342480184217,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 71,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 72,
				quote_text : 'RxzWeMiYp4Lw16X0',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 32,
				todo_item_id : 96,
			),
			date : 29,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			ttl_period : 69,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : -6851949791728389717,
			chat_id : 0,
			date : 77,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : 7378597370408130638,
			chat_id : 72,
			date : 84,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 1,
				peer_id : $client->peerUser(...),
			),
			pts : 0,
			pts_count : 11,
		),
		$client->updateMessageID(
			id : 22,
			random_id : 2037364069865748821,
		),
		$client->updateDeleteMessages(
			messages : array(55),
			pts : 91,
			pts_count : 90,
		),
		$client->updateUserTyping(
			user_id : -1373013180952600888,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -4786804166132867169,
			from_id : $client->peerUser(
				user_id : 1514284765718960268,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 7372777234320190280,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : 3022081347596425297,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 1765890585200160927,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : -8831276414587343353,
			date : 82,
			device : 'dUMn2vY6qPxHatZC',
			location : 'kJEZeS0mhbaf9Fvr',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 5104593264519028827,
				chat_id : 86,
				date : 18,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 89,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 97,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 73,
			),
			date : 5,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 48,
			max_date : 88,
			date : 39,
		),
		$client->updateChatParticipantAdd(
			chat_id : 4842214799801597429,
			user_id : -6545192444751924541,
			inviter_id : 4543172776567932619,
			date : 26,
			version : 66,
		),
		$client->updateChatParticipantDelete(
			chat_id : 7656248378952053549,
			user_id : -5645497466264706236,
			version : 30,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 93,
					ip_address : '127.0.0.1',
					port : 53,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 33,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : true,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 3,
			type : 'W86hYRJHQFS30Cux',
			message : '0sIpJnEKzkZLgteC',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 76,
					length : 46,
				),
				$client->messageEntityMention(
					offset : 32,
					length : 63,
				),
				$client->messageEntityHashtag(
					offset : 76,
					length : 58,
				),
				$client->messageEntityBotCommand(
					offset : 25,
					length : 15,
				),
				$client->messageEntityUrl(
					offset : 17,
					length : 93,
				),
				$client->messageEntityEmail(
					offset : 4,
					length : 19,
				),
				$client->messageEntityBold(
					offset : 37,
					length : 73,
				),
				$client->messageEntityItalic(
					offset : 38,
					length : 55,
				),
				$client->messageEntityCode(
					offset : 55,
					length : 73,
				),
				$client->messageEntityPre(
					offset : 3,
					length : 85,
					language : '5eWuh6JpjL8DxEBR',
				),
				$client->messageEntityTextUrl(
					offset : 1,
					length : 51,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 95,
					length : 21,
					user_id : -8777365172115244073,
				),
				$client->inputMessageEntityMentionName(
					offset : 32,
					length : 34,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 1,
					length : 90,
				),
				$client->messageEntityCashtag(
					offset : 75,
					length : 50,
				),
				$client->messageEntityUnderline(
					offset : 64,
					length : 72,
				),
				$client->messageEntityStrike(
					offset : 52,
					length : 55,
				),
				$client->messageEntityBankCard(
					offset : 84,
					length : 88,
				),
				$client->messageEntitySpoiler(
					offset : 69,
					length : 59,
				),
				$client->messageEntityCustomEmoji(
					offset : 66,
					length : 44,
					document_id : -3806675309830150278,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 75,
					length : 50,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-8806593772706828287),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(1369934922854515470),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(3447238701420403834),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(4908829834697481216),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 5825623754869269036,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 74,
			peer : $client->peerUser(
				user_id : -5922874808606710564,
			),
			max_id : 2,
			still_unread_count : 30,
			pts : 41,
			pts_count : 4,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 1806769994286539615,
			),
			max_id : 60,
			pts : 48,
			pts_count : 62,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 1723050138467881059,
				url : 'https://docs.liveproto.dev',
			),
			pts : 88,
			pts_count : 18,
		),
		$client->updateReadMessagesContents(
			messages : array(40),
			pts : 74,
			pts_count : 86,
			date : 12,
		),
		$client->updateChannelTooLong(
			channel_id : 5470113208163728676,
			pts : 87,
		),
		$client->updateChannel(
			channel_id : -3397555974096499605,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 39,
				peer_id : $client->peerUser(...),
			),
			pts : 94,
			pts_count : 52,
		),
		$client->updateReadChannelInbox(
			folder_id : 75,
			channel_id : -1423111999934035305,
			max_id : 74,
			still_unread_count : 41,
			pts : 41,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 2980523548430984744,
			messages : array(81),
			pts : 11,
			pts_count : 88,
		),
		$client->updateChannelMessageViews(
			channel_id : 9149836263928117963,
			id : 95,
			views : 74,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -1602685049807520972,
			user_id : -2826070765614621532,
			is_admin : false,
			version : 8,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(...),
				packs : array(
					$client->stickerPack(...),
				),
				keywords : array(
					$client->stickerKeyword(...),
				),
				documents : array(
					$client->documentEmpty(...),
					$client->document(...),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(5130000994289008634),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -5967500338727397857,
			user_id : -5404535092909517850,
			query : 'MDEpzFP8Jk0KLaos',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'ZctP4C8o31fSsvNR',
		),
		$client->updateBotInlineSend(
			user_id : 7999615593769419395,
			query : '4fmYKuh38Zt9DkrQ',
			geo : $client->geoPointEmpty(),
			id : 'dv7OHxRE1ubWmBSp',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 89,
				id : 6435310424459876142,
				access_hash : -8672235742807765291,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 56,
				peer_id : $client->peerUser(...),
			),
			pts : 68,
			pts_count : 70,
		),
		$client->updateBotCallbackQuery(
			query_id : 1642701211001498838,
			user_id : 8735334785758704830,
			peer : $client->peerUser(
				user_id : 3301126637002043247,
			),
			msg_id : 90,
			chat_instance : -8172664430984054329,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'lDpzrN3xsTC57ShP',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 15,
				peer_id : $client->peerUser(...),
			),
			pts : 98,
			pts_count : 19,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 8810071670199481056,
			user_id : 5216584188691798513,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 58,
				id : -7273861211394263846,
				access_hash : -6199755803987152555,
			),
			chat_instance : 99344538415326340,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'QdGREXBC01Lalve4',
		),
		$client->updateReadChannelOutbox(
			channel_id : -4631509025143472244,
			max_id : 60,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -8687097694504136544,
			),
			top_msg_id : 26,
			saved_peer_id : $client->peerUser(
				user_id : -8205048191686669274,
			),
			draft : $client->draftMessageEmpty(
				date : 63,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -3278347343708520284,
			webpage : $client->webPageEmpty(
				id : -1765846279175764476,
				url : 'https://docs.liveproto.dev',
			),
			pts : 21,
			pts_count : 98,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 68,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 70,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 21,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'grEZUhOioapI0c8k',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -8161344316304370001,
			data : $client->dataJSON(
				data : '8vWDwqm1EVCST4sn',
			),
			timeout : 39,
		),
		$client->updateBotShippingQuery(
			query_id : -198554006622974126,
			user_id : -4174186150108474758,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'a0Et7kvbjwpUcF3M',
				street_line2 : '2uIRXWNbmZxs5ca0',
				city : 'Eie08FVzcr1jAdhH',
				state : 'gFkljobXcPJ5ewuQ',
				country_iso2 : 'lyIwjtRL90JFxOsK',
				post_code : 'dgGML0iBqR3pCkz4',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -5951820182952429183,
			user_id : -1873323555386183474,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'XVwlJenftL0u9vAN',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'PpcY07gCn3UTfB4L',
			currency : 'HVSOpWm7juYJIdl5',
			total_amount : 6303478527779071751,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 6602532441575043452,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'cHIDZTPjlMfp9qiF',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'dt4YqplkQRisuvoe',
				from_version : 95,
				version : 70,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -1333791206648053905,
			top_msg_id : 71,
			saved_peer_id : $client->peerUser(
				user_id : -3090780293036632183,
			),
			messages : array(5),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 4997125348226138005,
			available_min_id : 42,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -4177266752917536615,
			),
		),
		$client->updateMessagePoll(
			poll_id : 6072160598612258916,
			poll : $client->poll(
				id : -7340364538225335150,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 16,
				close_date : 19,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 48,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'X7QPZHK0YmOec943',
				solution_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -2275408185566418632,
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
				until_date : 31,
			),
			version : 15,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 48,
				),
			),
			pts : 100,
			pts_count : 61,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -8418848611927772551,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 42,
				request_chat_title : 'LQnX5boTiZU4Yhmp',
				request_chat_date : 88,
				business_bot_id : 7339576904292814422,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -1505844736993821223,
				registration_month : 'Bt4wje7qf2Khlocp',
				phone_country : '+1234567890',
				name_change_date : 98,
				photo_change_date : 7,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 35,
					distance : 24,
				),
				$client->peerSelfLocated(
					expires : 85,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 96,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -2113591928735078765,
			),
			messages : array(63),
			sent_messages : array(43),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 5796061560506205286,
				access_hash : -4101529592451290728,
				slug : 'iMtbc9uoGZsCp1NX',
				title : 'JIos2Br8yDPCSRgX',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'GWZx3Q8hmoet5nY1',
				installs_count : 13,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -1003228683006167833,
			),
			msg_id : 38,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -2707216505104452560,
			peer : $client->peerUser(
				user_id : 7922708853415698124,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 18,
		),
		$client->updateDialogFilter(
			id : 45,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 78,
				title : $client->textWithEntities(...),
				emoticon : 'DfXPlU5wJj9me62G',
				color : 76,
				pinned_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				include_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				exclude_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(31),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -2994806419089407609,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 1191916613071245309,
			id : 26,
			forwards : 62,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -2386175950864834852,
			top_msg_id : 43,
			read_max_id : 33,
			broadcast_id : 5073690606849242767,
			broadcast_post : 26,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 1016965312470244089,
			top_msg_id : 25,
			read_max_id : 14,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -8246172101286019543,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -904492513537354550,
			top_msg_id : 11,
			from_id : $client->peerUser(
				user_id : 6131118219980354912,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 1845510827272613383,
			),
			messages : array(10),
			pts : 76,
			pts_count : 62,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 6472340721397654766,
			messages : array(6),
			pts : 75,
			pts_count : 85,
		),
		$client->updateChat(
			chat_id : 7948509184328529248,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -2781445465818297192,
				access_hash : 8303904143419937005,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(...),
					date : 39,
					active_date : 61,
					source : 32,
					volume : 12,
					about : 'xzT3IWQfCR67ynKg',
					raise_hand_rating : -3654159011897386577,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 90,
		),
		$client->updateGroupCall(
			chat_id : -1467950831738366359,
			call : $client->groupCallDiscarded(
				id : -1086045834644752238,
				access_hash : -8525338958546684805,
				duration : 73,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -5145617940014588685,
			),
			ttl_period : 32,
		),
		$client->updateChatParticipant(
			chat_id : -4687572015730247713,
			date : 35,
			actor_id : 280572632102223847,
			user_id : 2218237974079630333,
			prev_participant : $client->chatParticipant(
				user_id : 5218521302397954694,
				inviter_id : -7593359777111442640,
				date : 87,
			),
			new_participant : $client->chatParticipant(
				user_id : -967129668219276804,
				inviter_id : 5574654132231309657,
				date : 42,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'h6HpZqEb7dISFKxe',
				admin_id : 3160933868682059938,
				date : 73,
				start_date : 7,
				expire_date : 97,
				usage_limit : 60,
				usage : 85,
				requested : 3,
				subscription_expired : 46,
				title : '4291cdOXrPLU7AKx',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 95,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -3850011587730162400,
			date : 50,
			actor_id : -4355009772695079487,
			user_id : 6229092156273110800,
			prev_participant : $client->channelParticipant(
				user_id : -9181820788562981601,
				date : 96,
				subscription_until_date : 2,
			),
			new_participant : $client->channelParticipant(
				user_id : 5801207608625358126,
				date : 1,
				subscription_until_date : 28,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'FysCmzNXtKqoPl6r',
				admin_id : 878786909505216238,
				date : 79,
				start_date : 3,
				expire_date : 71,
				usage_limit : 16,
				usage : 100,
				requested : 20,
				subscription_expired : 62,
				title : 'XQU5LI4M9YNHbZOA',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 9,
		),
		$client->updateBotStopped(
			user_id : 5214481331006234160,
			date : 7,
			stopped : false,
			qts : 52,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'o9ESDbWBCgYa41h0',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -3254236310347147978,
			),
			bot_id : -6099885616419287730,
			commands : array(
				$client->botCommand(
					command : 'zkNhYgITFbOVmLnQ',
					description : 'ycNm0wsFgeX4Ti7D',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -1332718076948335996,
			),
			requests_pending : 91,
			recent_requesters : array(206950139531797744),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 4421978239906164697,
			),
			date : 71,
			user_id : 8819986364618151095,
			about : '1bA2BFldkgyNYsuw',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'xrRcBM9Z6wQX2vgL',
				admin_id : -781550064931757040,
				date : 56,
				start_date : 98,
				expire_date : 67,
				usage_limit : 92,
				usage : 54,
				requested : 91,
				subscription_expired : 90,
				title : 'PF8msJa6TfWIe5Eu',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 51,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -8140993335092582091,
			),
			msg_id : 35,
			top_msg_id : 83,
			saved_peer_id : $client->peerUser(
				user_id : 2126895665075951630,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -7292406574932412014,
		),
		$client->updateBotMenuButton(
			bot_id : -6184205022314591257,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -3710888185282528479,
			),
			msg_id : 21,
			transcription_id : -3682058273556501016,
			text : 'zUAxBd8wZu7Y16Xs',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -1570495919547364347,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -7095269105680140643,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -8868910748342617659,
			),
			msg_id : 43,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 88,
					h : 15,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 83,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : -4734407061670379055,
			topic_id : 40,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -6921794913494814950,
			order : array(51),
		),
		$client->updateUser(
			user_id : -7398727214575872396,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 8016642871193672715,
			),
			story : $client->storyItemDeleted(
				id : 17,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 4140128191564899209,
			),
			max_id : 81,
		),
		$client->updateStoryID(
			id : 75,
			random_id : 944079247462214230,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 52,
				cooldown_until_date : 38,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 2211832378136517101,
			),
			story_id : 40,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 5423618844363538210,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'hNS7AuMp3kTC9JdV',
				user_id : 1153128332105402709,
				giveaway_msg_id : 54,
				date : 12,
				expires : 7,
				used_gift_slug : 'CBov5IJM9Wn6xUDL',
				multiplier : 25,
				stars : 3339094857759327850,
			),
			qts : 99,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 8695060033363291893,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 625544691513566534,
			),
			wallpaper : $client->wallPaper(
				id : 4374803821207367906,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 6054109265038858886,
				slug : 'pfnKcs5uhTaXIFzm',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 8856809595382229475,
			),
			msg_id : 49,
			date : 87,
			actor : $client->peerUser(
				user_id : -2694457379772321794,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'NrJ0FWA7dZDXHuom',
				),
				$client->reactionCustomEmoji(
					document_id : -2950568589990341331,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'x6YIkUftF7QuiS9e',
				),
				$client->reactionCustomEmoji(
					document_id : -534556256275610585,
				),
				$client->reactionPaid(),
			),
			qts : 88,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -5286647190507293668,
			),
			msg_id : 89,
			date : 44,
			reactions : array(
				$client->reactionCount(
					chosen_order : 39,
					reaction : $client->reactionEmpty(...),
					count : 86,
				),
			),
			qts : 12,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 90,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : '8JsApL4x2rFXf67Q',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 10,
					shortcut : 'AokEaNFyncrZlgwp',
					top_message : 79,
					count : 99,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 80,
				shortcut : 'GDqrOLwzRtKfXs7F',
				top_message : 59,
				count : 78,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 9,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 32,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 50,
			messages : array(98),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'jP6fH47NRIXZ2ytA',
				user_id : 3631297153529150790,
				dc_id : 45,
				date : 25,
				rights : $client->businessBotRights(...),
			),
			qts : 65,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'XPvWCV59tLnyMr0K',
			message : $client->messageEmpty(
				id : 75,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 27,
				peer_id : $client->peerUser(...),
			),
			qts : 86,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'Q50sxtInW48PGDLU',
			message : $client->messageEmpty(
				id : 46,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 11,
				peer_id : $client->peerUser(...),
			),
			qts : 29,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'YOQZ1E5C7e06cU8I',
			peer : $client->peerUser(
				user_id : 6886494501764444253,
			),
			messages : array(10),
			qts : 2,
		),
		$client->updateNewStoryReaction(
			story_id : 5,
			peer : $client->peerUser(
				user_id : -1127465415966615830,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 7693702850892964312,
				nanos : 37,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 4828913968230723992,
			user_id : 6895242009250307068,
			connection_id : 'g7SBZuRyJzrxNDwo',
			message : $client->messageEmpty(
				id : 68,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 17,
				peer_id : $client->peerUser(...),
			),
			chat_instance : 6370695033572575415,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -1882914981797718675,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 89,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -8953621629017533300,
			payload : 'bgJB7eY40kCA8MHV',
			qts : 44,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 84,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 897729249369272874,
				access_hash : 1492123059789747311,
			),
			sub_chain_id : 0,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 5,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 5884234075432527723,
			saved_peer_id : $client->peerUser(
				user_id : 1710445258807780492,
			),
			read_max_id : 69,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 3228838808625055716,
			saved_peer_id : $client->peerUser(
				user_id : -3851679881111246552,
			),
			read_max_id : 54,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 6407232834727609048,
			saved_peer_id : $client->peerUser(
				user_id : -8608051768664938406,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -6788993374077115645,
			text : '5Zsu9GojvHiNLnOV',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 5886471389472294733,
			payload : 'YOHZn9u7aT1bNfDl',
			until_date : 89,
			qts : 52,
		),
		$client->updateUserPhoto(
			user_id : -2793637926819755403,
			date : 90,
			photo : $client->userProfilePhotoEmpty(),
			previous : true,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2212560593385582225,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3277319793211996182,
			title : 'kBRog4I2DnQHWw7A',
			photo : $client->chatPhotoEmpty(),
			participants_count : 69,
			date : 90,
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
				until_date : 99,
			),
		),
		$client->chatForbidden(
			id : -1091516572763499037,
			title : 'Uw8uL7oQvjxmhRJz',
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
			id : 8588531659100751707,
			access_hash : -716214772730910537,
			title : 'X6k81vftUyuqdiTK',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 32,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7gOyUXq5IjE04zTV',
					reason : 'ebQARjq7Nri8f09Z',
					text : 'UpyYeWd7946cGmq0',
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
				until_date : 28,
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
			participants_count : 95,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 54,
			color : $client->peerColor(
				color : 12,
				background_emoji_id : -6673575391544287115,
			),
			profile_color : $client->peerColor(
				color : 40,
				background_emoji_id : 7620837432097412922,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 89,
			subscription_until_date : 32,
			bot_verification_icon : -1103554107664950866,
			send_paid_messages_stars : 5826864384279849603,
			linked_monoforum_id : 7709619409141369731,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7208887767571373276,
			access_hash : -5144716671284050004,
			title : 'pKGiRjLXTM01tP7b',
			until_date : 42,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2792933601028173791,
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
			id : -2268197196122040369,
			access_hash : 7531104377331548003,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 47,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VuBaTcRnbvYMpjzd',
					reason : 'D5Bys1YvNMEpAnc6',
					text : 'X79C1vYrMpG2fwFc',
				),
			),
			bot_inline_placeholder : 'wxNfWH8TVS0Bnshg',
			lang_code : '8QfxYa4UysGPt2CX',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 91,
			color : $client->peerColor(
				color : 47,
				background_emoji_id : -7574254187385248871,
			),
			profile_color : $client->peerColor(
				color : 83,
				background_emoji_id : 3020661138571670894,
			),
			bot_active_users : 88,
			bot_verification_icon : -2398128324153587174,
			send_paid_messages_stars : 1603864230833578286,
		),
	),
	intermediate_state : $client->updates->state(
		pts : 53,
		qts : 73,
		date : 90,
		seq : 90,
		unread_count : 25,
	),
);
```