# updatesCombined

**Description** : *Constructor for a group of updates*

**Layer** : 222

```tl
updatesCombined#725b04c3 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq_start:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq_start</mark> | [`int`](type/int) | Value seq for the earliest update in a group |
| <mark>seq</mark> | [`int`](type/int) | Value seq for the latest update in a group |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updatesCombined(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(
					user_id : -4722629796456623024,
				),
			),
			pts : 33,
			pts_count : 40,
		),
		$client->updateMessageID(
			id : 88,
			random_id : -8687660640143108140,
		),
		$client->updateDeleteMessages(
			messages : array(75),
			pts : 21,
			pts_count : 38,
		),
		$client->updateUserTyping(
			user_id : -1280316095526911815,
			top_msg_id : 52,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 2412243309303591765,
			from_id : $client->peerUser(
				user_id : 3647887530491612497,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -8932927492433204572,
				self_participant : $client->chatParticipant(
					user_id : 3986497823414056131,
					inviter_id : 4662615391773332424,
					date : 94,
				),
			),
		),
		$client->updateUserStatus(
			user_id : -6272963723072545758,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 2126610462205038423,
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
			hash : 0,
			date : 27,
			device : '4yWr5vsIdHmUBthc',
			location : '0m5Lp1eOhMAjaYXc',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 5423706145133668015,
				chat_id : 68,
				date : 69,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 33,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 56,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 36,
			),
			date : 24,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 65,
			max_date : 52,
			date : 85,
		),
		$client->updateChatParticipantAdd(
			chat_id : -748735203654297076,
			user_id : -1062516284966673713,
			inviter_id : -6404752143162378333,
			date : 19,
			version : 23,
		),
		$client->updateChatParticipantDelete(
			chat_id : 2616336488778805190,
			user_id : 6585683966559783277,
			version : 63,
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
					id : 80,
					ip_address : '127.0.0.1',
					port : 76,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : 4379847911663452939,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 66,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 37,
			type : '6mZg2h4FnqwYGIAs',
			message : 'OrPg17VSfCN60bRu',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 10,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 82,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 7,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 33,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 83,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 93,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 37,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 15,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 82,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 100,
					language : 'BEHDtLrlwoqsCYfh',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 79,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 40,
					user_id : -2342459916364657924,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 45,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 66,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 4,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 44,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 86,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 46,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 41,
					document_id : -7929415123884882981,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 90,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(6070855874500756250),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(4548809150049405094),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(4337881924667027919),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-2948324616003329684),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 4838913622273643092,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 1,
			peer : $client->peerUser(
				user_id : 5453529568297959428,
			),
			top_msg_id : 58,
			max_id : 88,
			still_unread_count : 93,
			pts : 59,
			pts_count : 60,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 4948221892152436876,
			),
			max_id : 10,
			pts : 60,
			pts_count : 65,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 7652107197218916974,
				url : 'https://docs.liveproto.dev',
			),
			pts : 16,
			pts_count : 36,
		),
		$client->updateReadMessagesContents(
			messages : array(35),
			pts : 68,
			pts_count : 58,
			date : 69,
		),
		$client->updateChannelTooLong(
			channel_id : 4369313210683649069,
			pts : 10,
		),
		$client->updateChannel(
			channel_id : 8706615247856582735,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 6,
				peer_id : $client->peerUser(
					user_id : 2431888185157644489,
				),
			),
			pts : 77,
			pts_count : 77,
		),
		$client->updateReadChannelInbox(
			folder_id : 38,
			channel_id : 322706885376382230,
			max_id : 48,
			still_unread_count : 85,
			pts : 0,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 6816016914014253833,
			messages : array(35),
			pts : 5,
			pts_count : 25,
		),
		$client->updateChannelMessageViews(
			channel_id : 1014458004359709394,
			id : 66,
			views : 20,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 5915124621710616266,
			user_id : -2411737326121281785,
			is_admin : false,
			version : 56,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 44,
					id : -3662405742468732110,
					access_hash : 7553851023419811981,
					title : 't3J9VKMvDapwmBg0',
					short_name : '3urTGXPdMp9EbOVC',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 68,
					thumb_version : 25,
					thumb_document_id : -6377138913482506599,
					count : 4,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'DuZbmJvW8cNpVPwe',
						documents : array(4147601384419796572),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -5318826236539239312,
						keyword : array('3xgtlCynwUczkfGi'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 4383333950755506406,
					),
					$client->document(
						id : 502609082704642830,
						access_hash : 7374521313737260980,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 53,
						mime_type : 'CnLS2UQAjO4YW1kE',
						size : -3264423582329002119,
						thumbs : array(
							$client->photoSizeEmpty(...),
							$client->photoSize(...),
							$client->photoCachedSize(...),
							$client->photoStrippedSize(...),
							$client->photoSizeProgressive(...),
							$client->photoPathSize(...),
						),
						video_thumbs : array(
							$client->videoSize(...),
							$client->videoSizeEmojiMarkup(...),
							$client->videoSizeStickerMarkup(...),
						),
						dc_id : 17,
						attributes : array(
							$client->documentAttributeImageSize(...),
							$client->documentAttributeAnimated(...),
							$client->documentAttributeSticker(...),
							$client->documentAttributeVideo(...),
							$client->documentAttributeAudio(...),
							$client->documentAttributeFilename(...),
							$client->documentAttributeHasStickers(...),
							$client->documentAttributeCustomEmoji(...),
						),
					),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(-8782757900098131742),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -3599196025143957598,
			user_id : 5199019441461440006,
			query : 'wcyOpG62lfjkSMex',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : '4mEbiMzapNAdxv7X',
		),
		$client->updateBotInlineSend(
			user_id : -2753309321707393828,
			query : 'MkZCqfIETs1j8SA2',
			geo : $client->geoPointEmpty(),
			id : 'GCaLQFvWfOxkdBEI',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 34,
				id : -46163220330850983,
				access_hash : 7256356387685006072,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 71,
				peer_id : $client->peerUser(
					user_id : -5008174415763866627,
				),
			),
			pts : 45,
			pts_count : 32,
		),
		$client->updateBotCallbackQuery(
			query_id : -5396278485837573546,
			user_id : -3707443692878783761,
			peer : $client->peerUser(
				user_id : 34311734109777463,
			),
			msg_id : 76,
			chat_instance : -4998042180197798969,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'gjUxQIY8Eo3N1zDG',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(
					user_id : 5434783898496630693,
				),
			),
			pts : 54,
			pts_count : 8,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 2856406189441943898,
			user_id : 8811444855715646158,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 95,
				id : -5215270423551905614,
				access_hash : -4403424547159810090,
			),
			chat_instance : -6520195880542197923,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '7BMXy9T6iNjmospv',
		),
		$client->updateReadChannelOutbox(
			channel_id : -8422227589568867809,
			max_id : 18,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -6239327132945581256,
			),
			top_msg_id : 62,
			saved_peer_id : $client->peerUser(
				user_id : 5426852982427182959,
			),
			draft : $client->draftMessageEmpty(
				date : 16,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -5052343999009212058,
			webpage : $client->webPageEmpty(
				id : 5596746966591619182,
				url : 'https://docs.liveproto.dev',
			),
			pts : 73,
			pts_count : 10,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 12,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 267035664182593102,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 96,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 8397322190753543993,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 59,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'SCEjGRpFqt5houfn',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 4089989022111511148,
			data : $client->dataJSON(
				data : 'Iz4YHiks7rCVqwbR',
			),
			timeout : 32,
		),
		$client->updateBotShippingQuery(
			query_id : 348278851276429634,
			user_id : -9009182743246186972,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'MqRitEwjo2D1pFHz',
				street_line2 : 'BoIr31eHdt5Q8Wyh',
				city : '2QBWh3yIjP1K9RO7',
				state : 'UcIxy8LQCMpo9Ydg',
				country_iso2 : 'koV34UND0Cnfg1vu',
				post_code : 'od1fCEnLij5hKmMF',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -4280774992019930768,
			user_id : -2635804135343627204,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : '7RZikDsYjFIx4CbJ',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : '8jeUKowlPNhBgizb',
					street_line2 : 'ArKD5Po7MYUTud2v',
					city : 'owirVk0g4UObIapQ',
					state : 'UvIMilKOTeJZD7sw',
					country_iso2 : 'W0uHl5kyUh1CqadE',
					post_code : 'XinU6zGKfFdpwcqS',
				),
			),
			shipping_option_id : '72nxSvrf3UTRHGI0',
			currency : 'liGj7EwM1ObegXrz',
			total_amount : -3213825793071852175,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 7768313028898300574,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'ynteFWoYJR6SlD1X',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 't6uaMLY2SVx5XckE',
				from_version : 8,
				version : 12,
				strings : array(
					$client->langPackString(
						key : '3n6WVekIxoputCXM',
						value : 'bjzFpMOZtlas4ufN',
					),
					$client->langPackStringPluralized(
						key : 'r8vgpYz0STI9xfmj',
						zero_value : '7ECNi560nB2AkMw1',
						one_value : 'NWxdTJG3YtfRSsp1',
						two_value : 'gsfhno14caCAtIQq',
						few_value : 'GPrgyOljcoaY4WLX',
						many_value : 'mGphbjRsA9QnTwfF',
						other_value : '46S1JQVAfEX5GPKa',
					),
					$client->langPackStringDeleted(
						key : 'VQlLpaCMdwB6S8ie',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 7575097874086269051,
			top_msg_id : 16,
			saved_peer_id : $client->peerUser(
				user_id : 8581646536787519577,
			),
			messages : array(93),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -628552502552448047,
			available_min_id : 40,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -3663961627157332670,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : -4066818674688628472,
			),
		),
		$client->updateMessagePoll(
			poll_id : -1516660444866779400,
			poll : $client->poll(
				id : 4628038557740125235,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'Gw4R9WcqHujgDnL0',
					entities : array(
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
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				close_period : 25,
				close_date : 34,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 1,
					),
				),
				total_voters : 31,
				recent_voters : array(
					$client->peerUser(
						user_id : -3277405145977088283,
					),
					$client->peerChat(
						chat_id : 3178298378842975393,
					),
					$client->peerChannel(
						channel_id : -910802061330961704,
					),
				),
				solution : 'z5jUcJtlXO4dr0FP',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 11,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 70,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 99,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 5,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 72,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 1,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 4,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 4,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 8,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 65,
						language : '2H6UvlST4Rdgrzi0',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 61,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 92,
						user_id : -7958326112956067294,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 94,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 90,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 86,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 5,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 1,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 43,
						document_id : 7392311141012836779,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 97,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -4581040641198237955,
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
				until_date : 23,
			),
			version : 59,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -6564849436951169016,
					),
					folder_id : 20,
				),
			),
			pts : 41,
			pts_count : 21,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 6893982063017323321,
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
				geo_distance : 54,
				request_chat_title : 'PtSGeQTA6Y5d19hE',
				request_chat_date : 22,
				business_bot_id : -6717342873536892696,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -3942068579856072998,
				registration_month : 'QKefytE6qW47juFr',
				phone_country : '+1234567890',
				name_change_date : 40,
				photo_change_date : 33,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 8402505839596872963,
					),
					expires : 58,
					distance : 16,
				),
				$client->peerSelfLocated(
					expires : 63,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 52,
				peer_id : $client->peerUser(
					user_id : 1174956584624963167,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 3469698175111390352,
			),
			messages : array(33),
			sent_messages : array(8),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -6178593574623088970,
				access_hash : -500624137235075956,
				slug : 'ciLpMSI91ayXzm60',
				title : 'vlDQTikdqWeZf48s',
				document : $client->documentEmpty(
					id : -3651016336675428167,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 13,
						outbox_accent_color : 66,
						message_colors : array(88),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'YudztFPsmXlOiHKU',
				installs_count : 21,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 5026859735832324069,
			),
			msg_id : 33,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -1433901826321023388,
			peer : $client->peerUser(
				user_id : 564877841389365735,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 19,
		),
		$client->updateDialogFilter(
			id : 13,
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
				id : 12,
				title : $client->textWithEntities(
					text : 'wB4DQSiqkmzsTRP1',
					entities : array(
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
				emoticon : 'W6vVNEmXYagMk2UZ',
				color : 86,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(71),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 6422033500462884769,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 5702967243108572025,
			id : 92,
			forwards : 10,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -2989390896846793306,
			top_msg_id : 20,
			read_max_id : 30,
			broadcast_id : 7394150624755424844,
			broadcast_post : 0,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -3886506180933481854,
			top_msg_id : 58,
			read_max_id : 63,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 8108254993644759627,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 2855566501439079250,
			top_msg_id : 14,
			from_id : $client->peerUser(
				user_id : 9162407825089055151,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 1450896975917275886,
			),
			messages : array(84),
			pts : 43,
			pts_count : 48,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 8997711233682896401,
			messages : array(63),
			pts : 33,
			pts_count : 32,
		),
		$client->updateChat(
			chat_id : 3755024939335118984,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -5701547668348210140,
				access_hash : 4885878183221897664,
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
					peer : $client->peerUser(
						user_id : -3727247116738557865,
					),
					date : 7,
					active_date : 7,
					source : 53,
					volume : 70,
					about : 'RlV5ftMLj6pJuQhG',
					raise_hand_rating : 8237906351694843361,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'hnQLGp8WRFUlxkVv',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 26,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'kamFpTBZQ4dlHWRe',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 40,
					),
					paid_stars_total : 6164720798910933092,
				),
			),
			version : 90,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -8272915091392544122,
			),
			call : $client->groupCallDiscarded(
				id : -4855212064530498091,
				access_hash : -1297375185808877683,
				duration : 70,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -4851846226205686448,
			),
			ttl_period : 78,
		),
		$client->updateChatParticipant(
			chat_id : -1569425862977843764,
			date : 27,
			actor_id : 8835840834810135277,
			user_id : -2200138721643935827,
			prev_participant : $client->chatParticipant(
				user_id : -3993990092281937403,
				inviter_id : 6976036099632723135,
				date : 38,
			),
			new_participant : $client->chatParticipant(
				user_id : 326522223016168118,
				inviter_id : -7902352922207193996,
				date : 20,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'vpcf9DY5htZaboV0',
				admin_id : -2918469413232230747,
				date : 9,
				start_date : 12,
				expire_date : 8,
				usage_limit : 21,
				usage : 32,
				requested : 98,
				subscription_expired : 94,
				title : 'b1Mr50t6fyJWwHGp',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 26,
					amount : -5166089000403279189,
				),
			),
			qts : 45,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 3681624964831212485,
			date : 40,
			actor_id : 5687726752830330635,
			user_id : 9098514297112693564,
			prev_participant : $client->channelParticipant(
				user_id : 5854002558665277662,
				date : 40,
				subscription_until_date : 29,
			),
			new_participant : $client->channelParticipant(
				user_id : -4014878180762007092,
				date : 84,
				subscription_until_date : 19,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'gPZ91a58NoGmyvlq',
				admin_id : -229417003490307644,
				date : 12,
				start_date : 83,
				expire_date : 88,
				usage_limit : 59,
				usage : 93,
				requested : 38,
				subscription_expired : 41,
				title : 'PJdxmuvH0Br6VqoE',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 38,
					amount : -2158008018845578286,
				),
			),
			qts : 2,
		),
		$client->updateBotStopped(
			user_id : 4315468467233729369,
			date : 68,
			stopped : true,
			qts : 76,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'C3Pa0isRyFhqGBb2',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 7198927831456112570,
			),
			bot_id : 1446541792728460005,
			commands : array(
				$client->botCommand(
					command : 'JaDWMrg1oY8is9Cd',
					description : '7SJuZXHqD9MI4nLN',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 9035399297013602372,
			),
			requests_pending : 79,
			recent_requesters : array(-1143667786815735524),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 6908237051908686615,
			),
			date : 45,
			user_id : 3665791816605008150,
			about : 'q81oUAbr3gQD7Sij',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'tSFHQNC90yuz1EoK',
				admin_id : 3256766699386405138,
				date : 64,
				start_date : 7,
				expire_date : 34,
				usage_limit : 78,
				usage : 14,
				requested : 37,
				subscription_expired : 96,
				title : 'nWbQ3zKfcLY1ohk4',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 22,
					amount : 8774869161038159561,
				),
			),
			qts : 41,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 3105422021300473037,
			),
			msg_id : 22,
			top_msg_id : 3,
			saved_peer_id : $client->peerUser(
				user_id : 5587442981488870655,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 27,
						reaction : $client->reactionEmpty(...),
						count : 19,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 32,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 53,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 7742720568842609766,
		),
		$client->updateBotMenuButton(
			bot_id : 1403950623445745125,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 3979661455983802813,
			),
			msg_id : 23,
			transcription_id : -6393017121800857543,
			text : '3l1ecJZR4phq0fgb',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -1959828943224392057,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 2033154548165573143,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -7132549024645084095,
			),
			msg_id : 28,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 28,
					h : 62,
					thumb : $client->photoSizeEmpty(
						type : 'epxLlbuHZJWj4hT8',
					),
					video_duration : 90,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -2407297502900514211,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 3992966237322643133,
			),
			story : $client->storyItemDeleted(
				id : 78,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 4796683572951767990,
			),
			max_id : 49,
		),
		$client->updateStoryID(
			id : 32,
			random_id : -8638987386356759648,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 10,
				cooldown_until_date : 46,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -4131739204323305145,
			),
			story_id : 8,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 6518819099503449661,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : '0UomqKi1ygA8pXfc',
				user_id : 5099719794105589922,
				giveaway_msg_id : 15,
				date : 15,
				expires : 5,
				used_gift_slug : 'SphEja9JrfVzFOHD',
				multiplier : 31,
				stars : 6542093331308094657,
			),
			qts : 50,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 917645959955774754,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -7020952000950316221,
			),
			wallpaper : $client->wallPaper(
				id : -1043672195622295643,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 3161088590102213781,
				slug : 'gZfhPF3vYt7XlN58',
				document : $client->documentEmpty(
					id : 9026294420892712884,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 93,
					second_background_color : 78,
					third_background_color : 82,
					fourth_background_color : 81,
					intensity : 60,
					rotation : 77,
					emoticon : '6grq8LczAPO19lMk',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 747847748671282334,
			),
			msg_id : 3,
			date : 74,
			actor : $client->peerUser(
				user_id : -1136042957761828273,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '0kd7l5sp41LO2EVt',
				),
				$client->reactionCustomEmoji(
					document_id : -3962392139638426345,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'PiXO1053FGyUWej2',
				),
				$client->reactionCustomEmoji(
					document_id : 446013341192630028,
				),
				$client->reactionPaid(),
			),
			qts : 100,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 7774073487534820782,
			),
			msg_id : 21,
			date : 0,
			reactions : array(
				$client->reactionCount(
					chosen_order : 84,
					reaction : $client->reactionEmpty(),
					count : 75,
				),
			),
			qts : 59,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 713068888520485977,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -5030463777877942357,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 63,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'gv701QX3LMn2hjPs',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 84,
					shortcut : 'aSeBtn5CIJs3kAEy',
					top_message : 85,
					count : 97,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 12,
				shortcut : 'ya65VciILUFftWQM',
				top_message : 46,
				count : 59,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 97,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 91,
				peer_id : $client->peerUser(
					user_id : 2721304334326604568,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 50,
			messages : array(13),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'F1i7XkxgBMcfreJ5',
				user_id : 7512727704959412260,
				dc_id : 33,
				date : 31,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 35,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'ACqY4l3BctHvJL0p',
			message : $client->messageEmpty(
				id : 56,
				peer_id : $client->peerUser(
					user_id : -7637941537270413607,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 64,
				peer_id : $client->peerUser(
					user_id : 3391465091913419060,
				),
			),
			qts : 35,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'SrRwgZWzNBjpvGo9',
			message : $client->messageEmpty(
				id : 49,
				peer_id : $client->peerUser(
					user_id : 2443285391654313119,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 90,
				peer_id : $client->peerUser(
					user_id : -1744355875147003399,
				),
			),
			qts : 30,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'WeD12zPkajw9Tr5O',
			peer : $client->peerUser(
				user_id : 7213328915132647954,
			),
			messages : array(93),
			qts : 89,
		),
		$client->updateNewStoryReaction(
			story_id : 97,
			peer : $client->peerUser(
				user_id : -754229925838938567,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -6246466258579828154,
				nanos : 7,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 2307812622211280440,
			user_id : 5617133799505306373,
			connection_id : 'rCJIW1kVOsPXqoZc',
			message : $client->messageEmpty(
				id : 98,
				peer_id : $client->peerUser(
					user_id : -8536254776150210760,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 56,
				peer_id : $client->peerUser(
					user_id : -5876040039260686915,
				),
			),
			chat_instance : -5999019155795867934,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 7375350636983668090,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 7484395340003050126,
					nanos : 28,
				),
				available_balance : $client->starsAmount(
					amount : 2262312097591851280,
					nanos : 82,
				),
				overall_revenue : $client->starsAmount(
					amount : -6003678048793036748,
					nanos : 9,
				),
				next_withdrawal_at : 2,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -8011613316995649242,
			payload : 'nALGJCdIRfubpjxc',
			qts : 77,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 14,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 52,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -8825403013219253642,
				access_hash : -256039450448493574,
			),
			sub_chain_id : 32,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 20,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -4511820000878750989,
			saved_peer_id : $client->peerUser(
				user_id : 9199720395772115105,
			),
			read_max_id : 49,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -28002828130194446,
			saved_peer_id : $client->peerUser(
				user_id : 7483203286189200689,
			),
			read_max_id : 44,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -5951144720290270005,
			saved_peer_id : $client->peerUser(
				user_id : 9116619327287605319,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -3579272866974973955,
				access_hash : -8909644685514287643,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 24,
				from_id : $client->peerUser(
					user_id : -8642103585903378717,
				),
				date : 23,
				message : $client->textWithEntities(
					text : '3ocZlLjEKwyS2xiC',
					entities : array(
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
				paid_message_stars : 8720991002969795489,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 3708232759382390997,
				access_hash : 1774597319602409750,
			),
			from_id : $client->peerUser(
				user_id : 5406486813722579398,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : -5395136612334312808,
			),
			topic_id : 59,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -6739320816872239043,
			),
			order : array(82),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : 7580101129481642835,
				access_hash : 7942903617170151212,
			),
			messages : array(82),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -4648936117123149292,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -4444171206991030906,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -3188962565024776984,
				bid_date : 13,
				min_bid_amount : 834150951637353144,
				bid_peer : $client->peerUser(
					user_id : 402104528114699707,
				),
				acquired_count : 81,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
	),
	users : array(
		$client->userEmpty(
			id : -292828488485630906,
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
			id : 7085773207740336286,
			access_hash : 5824338622356837137,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 28,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'EsxyFY53M2SjTaHQ',
					reason : 'ksB2Wdr98LxzpZHQ',
					text : '5lVAzMchC1XYjPI8',
				),
			),
			bot_inline_placeholder : 'fqLlIWJ4rg2e7b51',
			lang_code : 'dJrwRUh29ipTkq37',
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
				max_id : 68,
			),
			color : $client->peerColor(
				color : 32,
				background_emoji_id : 6002170032169525054,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : 8358866405621485948,
			),
			bot_active_users : 84,
			bot_verification_icon : -1569962538276236333,
			send_paid_messages_stars : 8746408577594591620,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6676443023529612252,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6228126005978199206,
			title : 'szfWDQUIYC8jNXST',
			photo : $client->chatPhotoEmpty(),
			participants_count : 85,
			date : 10,
			version : 77,
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
				until_date : 55,
			),
		),
		$client->chatForbidden(
			id : -2215652549835429001,
			title : 'Yx3kTwQh4Opq1mEy',
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
			id : -5394006209483761170,
			access_hash : -1012486040356675674,
			title : 'Q20EXskabY6dfWAG',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 43,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IxV3E9yUzXkjfKp5',
					reason : 'TZj09xgOrERl4Lih',
					text : 'nBQP4vXAb2IZtmjp',
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
				until_date : 37,
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
				until_date : 62,
			),
			participants_count : 78,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 17,
			),
			color : $client->peerColor(
				color : 100,
				background_emoji_id : 4490457526707422579,
			),
			profile_color : $client->peerColor(
				color : 75,
				background_emoji_id : 33616827004114969,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 69,
			subscription_until_date : 54,
			bot_verification_icon : 1199295733712732178,
			send_paid_messages_stars : 4505386332969972303,
			linked_monoforum_id : 2037591430635297177,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -8381682916018240333,
			access_hash : 1097665016050317821,
			title : 'FuTrJIK2R3dw97tg',
			until_date : 90,
		),
	),
	date : 93,
	seq_start : 65,
	seq : 39,
);
```