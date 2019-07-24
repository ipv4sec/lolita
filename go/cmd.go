/*
 * @author Qi Fenglong (qifenglong@artron.net) @time: 2019-07-16
 * Copyright (c) 2000-2019. http://www.artron.net. All rights reserved.
 * Use of this source code is governed a license that can be found in the LICENSE file.
 */
package main

import (
	"github.com/gin-gonic/gin"
	"github.com/satori/go.uuid"
)

func main() {
	r := gin.Default()
	serverId := uuid.NewV4()

	r.GET("/", func(c *gin.Context) {
		c.JSON(200, gin.H{
			"language": "golang",
			"serverId": serverId,
		})
	})
	r.Run("0.0.0.0:3000")
}

